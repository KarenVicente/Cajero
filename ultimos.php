<?php 
	session_start();
	require_once 'Libreria/class.conexion.php';
	$base= new base();
	$base-> conectar();

	$fecha=date('Y-m-d');
	$_SESSION['fecha']=$fecha;

	/*$consulta="SELECT usuarios.Nombre as nombre, usuarios.Saldo as saldo, tarjetas.Numero as tarjeta, retiros.Fecha_retiro as fecha
				FROM usuarios,tarjetas,retiros
				WHERE usuarios.Cod_Usuario=tarjetas.Cod_Usuario
				AND retiros.Cod_Usuario=usuarios.Cod_Usuario
				AND tarjetas.Numero=".$_SESSION['tarjeta']."
				AND usuarios.Cod_Usuario=".$_SESSION['codigo']."
				AND retiros.Fecha_retiro=".$_SESSION['fecha'];*/
	$consulta="SELECT usuarios.Nombre as nombre, usuarios.Saldo as saldo, tarjetas.Numero as tarjeta, retiros.Fecha_retiro as fecha
				FROM usuarios, tarjetas, retiros
				WHERE tarjetas.Cod_Usuario=usuarios.Cod_Usuario
				AND retiros.Cod_Usuario=usuarios.Cod_Usuario
				AND usuarios.Cod_Usuario=".$_SESSION['codigo']."
				AND tarjetas.Numero=".$_SESSION['tarjeta']."
				LIMIT 3 ";


	$ejecutar=$base->ejecutar($consulta);
	$fila=$base->obtener_array($ejecutar);
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Últimos retiros</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="materialize/css/materialize.css">
	<link rel="stylesheet" href="estilos.css">
</head>
<style>
	.container{
		font-family: Montserrat;
		padding-top: 5%;
	}
	.encabezado{
		padding-top: 50px;
	}
	.centrar{
		padding: 40%;
	}
	.card-content{
		border-right: 15px solid #455a64;
	}
	.mm{
		padding-top: 20px;
	}
</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col m12">
				<h4 class="center card-title">Últimos Retiros</h4>
				<!--<h4 class="center"><b><span id="banco"><?php echo $_SESSION['nombreb']; ?></span></b></h4>-->
				<div class="card">
			        <div class="card-content black-text z-depth-3">
						<div class="row">
							<div class="col m4">
								<label for="">Nombre</label> <?php echo $fila['nombre'] ?> 
							</div>
							<div class="col m4">
								<label for="">No. de Tarjeta</label> <?php echo $fila['tarjeta'] ?>
							</div>
							<div class="col m4">
								<label for="">Fecha</label> <?php echo $fecha=date('Y-m-d'); ?>
							</div>
							<div class="col m12">
								<div class="mm">
									<table class="responsive-table striped" >
										<tr>
											<th>Fecha de Retiro</th>
											<th class="right">Monto retirado</th>
										</tr>
									<?php
										$consulta="SELECT usuarios.Nombre as nombre, usuarios.Saldo as saldo, retiros.Monto as monto, tarjetas.Numero as tarjeta, retiros.Fecha_retiro as fecha
										FROM usuarios, tarjetas, retiros
										WHERE tarjetas.Cod_Usuario=usuarios.Cod_Usuario
										AND retiros.Cod_Usuario=usuarios.Cod_Usuario
										AND usuarios.Cod_Usuario=".$_SESSION['codigo']."
										AND tarjetas.Numero=".$_SESSION['tarjeta']."
										LIMIT 3 "; 
									
										$ejecutar=$base->ejecutar($consulta);
									
										while ($fila=$base->obtener_array($ejecutar)) {
											echo '
													<tr>
														<td>'.$fila["fecha"].'</td>
														<td class="right">Q '.number_format($fila["monto"],2,'.',',').'</td>
													</tr>
												';
										}
									
									 ?>
									 <?php 
									 $consulta="SELECT usuarios.Saldo as saldo FROM usuarios, tarjetas WHERE usuarios.Cod_Usuario=tarjetas.Cod_Usuario AND usuarios.Cod_Usuario=".$_SESSION['codigo']."
										AND tarjetas.Numero=".$_SESSION['tarjeta'];
										$ejecutar=$base->ejecutar($consulta);
										$fila=$base->obtener_array($ejecutar);
									
									 echo '
									 	<tr>
											<th>Saldo</th>
											<th class="right">Q '.number_format($fila["saldo"],2,'.',',').'</th>
										</tr>
									 </table>';
									
									  ?>
								</div>
							</div>
						</div>
			        </div>
			      </div>

				 <a href="index.php" class="btn deep-orange">Atras</a>

			</div>
		</div>
	</div>
	

	<script src="js/jquery-3.3.1.js"></script>
	<script src="materialize/js/materialize.js"></script>
	<script src="js/funciones.js"></script>
	<script>
		$(document).ready(function(){
		    $('.modal').modal();
		    
		  });
	</script>
</body>
</html>