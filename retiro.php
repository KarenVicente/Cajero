<?php 
session_start();



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Retiros</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="materialize/css/materialize.css">
</head>
<style>
	.monto a:hover{
		cursor: pointer;
		color:red;
		font-family: Bree Serif;
	}
	body{
		font-family: Raleway;
	}
</style>
<body>
	<main>
		<div class="container">
			<div class="row">
				<div class="col m12">
					<h4 class="center">Seleccione la Cantidad a Retirar</h4>
				</div>
				<div class="col m12">
					<div class="row">
						<form id="retiro">
							<div class="col m6">
								<ul>
									<li class="monto"><a href="#!">Q 200.00</a></li>
									<li class="monto"><a href="#!">Q 200.00</a></li>
									<li class="monto"><a href="#!">Q 200.00</a></li>
									<li class="monto"><a href="#!">Q 200.00</a></li>
								</ul>
							</div>
							<div class="col m6">
								<ul>
									<li class="monto"><a href="#!">Q 200.00</a></li>
									<li class="monto"><a href="#!">Q 200.00</a></li>
									<li class="monto"><a href="#!">Q 200.00</a></li>
									<li id="monto" class="monto"><a href="#!">Seleccioné monto</a></li>
								</ul>
							</div>
							
						</form>
						<form id="mas">
							<div class="col m12 input-field">
								<i class="material-icons prefix"><b>Q</b></i>
						        <input id="icon_prefix" type="text" class="validate">
						        <label for="icon_prefix">Monto que deseo Retirar</label>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</main>



	<script src="js/jquery-3.3.1.js"></script>
	<script src="materialize/js/materialize.js"></script>
	<script src="js/funciones.js"></script>
	
</body>
</html>