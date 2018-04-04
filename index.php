<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Cajero Automático</title>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
	 				<p id="informacion">
	 					<b>Bienvenido a tú cajero atomático.
	 					</b>  Estamos aquí para servirte desde el lugar en el que te encuentres. Selecciona un banco parainiciar con tu accion.
	 				</p>
	 				<form id="formularioBan">
				 		<div class="row">
				 			<div class="col m12">
				 				<img src="Imagenes/banrural.png" alt="" width="180px" height="auto">
				 			</div>
				 			<div class="col m5">
				 				<label>No. de Tarjeta </label>
				 				<input type="hidden" name="codigo" value="3">
				 				<input type="text" name="tarjeta" id="btarjeta">
				 				<label>Contraseña </label>
				 				<input type="password" name="password" id="bpassword">
				 				<button id="bboton" data-target="modal1" class="btn waves-effect waves-light right green darken-3">Confirmar</button>
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
				 				<input type="hidden" name="codigo" value="4">
				 				<input type="text" name="tarjeta" id="gtarjeta">
				 				<label>Contraseña </label>
				 				<input type="password" name="password" id="gpassword">
				 				<button id="gboton" data-target="modal1" class="btn waves-effect waves-light  blue right">Confirmar</button>
				 			</div>
				 			<div class="offset-m2 col m5">
				 				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni iure harum aliquid itaque amet dolore mollitia magnam voluptatibus iste ipsam.
				 			</div>
				 		</div>
				 	</form>
	 			</div>
	 		</div>
	 </main>

	  <!-- Modal Trigger -->
	  <div id="denegado"></div>

	  <!-- Modal Trigger -->


	  <div id="acceso" class="modal">
	    <div class="modal-content">
	      <h4>Bienvenido a tu Banco <span id="banco"></span></h4>
	      <p>Selecciona la funcion que necesitas</p>
	      <ul>
	      	<li><i class="tiny material-icons">label</i><a href="#!"> Retiro</a></li>
	      	<li><i class="tiny material-icons">label</i><a href="#!"> Consultar saldo</a></li>
	      	<li><i class="tiny material-icons">label</i><a href="#!"> Últimos retiros</a></li>
	      	<li><i class="tiny material-icons">label</i><a href="#!"> Cancelar</a></li>
	      </ul>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
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
<body>
	
</body>
</html>