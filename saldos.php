<?php 
	session_start();
	require_once 'Libreria/class.conexion.php';
	$base= new base();
	$base-> conectar();

	$consulta="SELECT usuarios.Saldo as Saldo, usuarios.Nombre as Nombre, tarjetas.Numero as Numero FROM usuarios, tarjetas WHERE tarjetas.Cod_Usuario=usuarios.Cod_Usuario	AND usuarios.Cod_Usuario=".$_SESSION['codigo'];
	$ejecutar=$base->ejecutar($consulta);
	$fila=$base->obtener_array($ejecutar);

	//echo $consulta;
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consulta de Saldos</title>
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
</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col m12 centrar">
				<h4 class="center card-title">Estados de Saldos</h4>
				<div class="card">
			        <div class="card-content black-text   z-depth-3">
						
					
						<div class="row">
							<!--<h4 class="center"><b><span id="banco"><?php echo $_SESSION['nombreb']; ?></span></b></h4>-->
							<div class="col m4">
								<label for="">Nombre</label> <?php echo $fila['Nombre'] ?>
							</div>
							<div class="col m4">
								<label for="">No. de Tarjeta</label> <?php echo $fila['Numero']; ?>
							</div>
							<div class="col m4">
								<label for="">Fecha</label> <?php echo $fecha=date('Y-m-d'); ?>
							</div>
							<div class="encabezado">
								<table class="responsive-table striped" >
									<tr>
										<th>Saldo</th>
										<th class="right">Q <?php echo number_format($fila['Saldo'],'2','.',','); ?></th>
									</tr>
								</table>
							</div>
						</div>

			        </div>
			      </div>
			      <a href="index.php" class="btn deep-orange">Atras</a>

			</div>
			<div class="col-m3">
				<!--<img src="Imagenes/banesco.png" alt="" width="70px">-->
			</div>
		</div>
	</div>




	<script src="js/jquery-3.3.1.js"></script>
	<script src="materialize/js/materialize.js"></script>
	<script src="js/funciones.js"></script>
</body>
</html>
