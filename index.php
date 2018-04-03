<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Cajero Automático</title>
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="materialize/css/materialize.css">
</head>
<style>
	body{
		font-family: Raleway;
	}
	.link{
		  pointer-events: none;
		  font-family: Bree Serif;

	}
</style>
	<?php 
	require_once 'Libreria/class.conexion.php';
	$base= new base();

	$base-> conectar();
	


	 ?>
	 <main>
	 	<div class="container">
	 		<div class="row">
	 			<div class="col m4">
	 				<h5  class="">Bancos Disponibles</h5>
	 				<a href="#" id="b">Banrural</a><br>
	 				<a href="#" id="g">G&T</a>
	 			</div>
	 			<div class="col m8">
	 				<h1>Cajero Automático</h1>
	 				<p id="informacion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum dolores eveniet tempora asperiores, a vel vero. Quam, quia sapiente? Dolor, consequatur voluptas cupiditate qui dignissimos aut tempore voluptates nemo nisi facere minima dolore adipisci impedit consectetur magnam, obcaecati blanditiis reiciendis quam! Repellendus mollitia consectetur delectus minus voluptatum alias esse ullam dicta sint velit omnis, enim earum, eveniet eum quas quod est magni quae inventore temporibus fugit officia! Enim porro consequuntur inventore vel dolore, vero, explicabo quidem, molestiae doloribus delectus mollitia eos reprehenderit accusamus sapiente ut, amet nihil blanditiis rerum dicta qui similique quam consequatur beatae. Ab placeat numquam harum, optio.</p>
	 				<form id="formularioBan">
				 		<div class="row">
				 			<div class="col m12">
				 				<img src="Imagenes/banrural.png" alt="" width="180px" height="auto">
				 			</div>
				 			<div class="col m5">
				 				<label>No. de Tarjeta </label>
				 				<input type="text" name="tarjeta" id="btarjeta">
				 				<label>Contraseña </label>
				 				<input type="password" name="password" id="bpassword">
				 				<button id="bboton" class="btn waves-effect waves-light right green darken-3">Confirmar</button>
				 			</div>
				 			<div class="offset-m2 col m5">
				 				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni iure harum aliquid itaque amet dolore mollitia magnam voluptatibus iste ipsam.
				 			</div>
				 		</div>
				 	</form>
				 	<form id="formularioGt">
				 		<div class="row">
				 			<div class="col m12">
				 				<img src="Imagenes/gt.png" alt="" width="180px" height="auto">
				 			</div>
				 			<div class="col m5">
				 				<label>No. de Tarjeta </label>
				 				<input type="text" name="tarjeta" id="gtarjeta">
				 				<label>Contraseña </label>
				 				<input type="password" name="password" id="gpassword">
				 				<button id="gboton" class="btn waves-effect waves-light  red darken-2 right">Confirmar</button>
				 			</div>
				 			<div class="offset-m2 col m5">
				 				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni iure harum aliquid itaque amet dolore mollitia magnam voluptatibus iste ipsam.
				 			</div>
				 		</div>
				 	</form>
	 			</div>
	 		</div>
	 </main>
	 


	<script src="js/jquery-3.3.1.js"></script>
	<script src="materialize/js/materialize.js"></script>
	<script src="js/funciones.js"></script>
<body>
	
</body>
</html>