<?php 
	session_start();
	require_once 'Libreria/class.conexion.php';
	$base= new base();
	$base-> conectar();

	$consulta="SELECT Saldo FROM usuarios WHERE Cod_Usuario=".$_SESSION['codigo'];
	$ejecutar=$base->ejecutar($consulta);
	$fila=$base->obtener_array($ejecutar);

	//echo $consulta;
 ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consulta de Saldos</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="materialize/css/materialize.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col m12">
				<h3 class="center">Estados de Saldos</h3>
				<h4 class="center"><b><span id="banco"><?php echo $_SESSION['nombreb']; ?></span></b></h4>
				<label for="">Nombre</label> Karen Vicente <br>
				<label for="">No. de Tarjeta</label> 123456789 <br>
				<div class="col m1">
					<div>Saldo</div>
				</div>
				<div class="col m2">
					<div>_____________________</div>
				</div>
				<div class="col m4">
					<div>Q <?php echo number_format($fila['Saldo'],'2','.',','); ?></div>
				</div>

			</div>
		</div>
	</div>
	





	<script src="js/jquery-3.3.1.js"></script>
	<script src="materialize/js/materialize.js"></script>
	<script src="js/funciones.js"></script>
</body>
</html>
