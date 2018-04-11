<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Retiros</title>
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
	.encabezado{
		padding-top: 50px;
	}
	.monto a:hover{
		cursor: pointer;
		color:#0277bd;
		/*font-family: Bree Serif;*/
		font-weight: bold;
	}
	.monto a:focus{
		color:#01579b;
		font-weight: bold;
		/*font-family: Bree Serif;*/
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
					<h4 class="center card-title">Seleccione la Cantidad a Retirar</h4>
					<div class="card">
				        <div class="card-content black-text   z-depth-3">
							<div class="row">
								<form id="retiro">
									<div class="col m6">
										<ul>
											<li class="monto"><i class="material-icons tiny">label</i><a href="#!" onclick="retiro(50)">Q 50.00</a></li>
											<li class="monto"><i class="material-icons tiny">label</i><a href="#!" onclick="retiro(100)">Q 100.00</a></li>
											<li class="monto"><i class="material-icons tiny">label</i><a href="#!" onclick="retiro(150)">Q 150.00</a></li>
											<li class="monto"><i class="material-icons tiny">label</i><a href="#!" onclick="retiro(200)">Q 200.00</a></li>
										</ul>
									</div>
									<div class="col m6">
										<ul>
											<li class="monto"><i class="material-icons tiny">label</i><a href="#!" onclick="retiro(300)">Q 300.00</a></li>
											<li class="monto"><i class="material-icons tiny">label</i><a href="#!" onclick="retiro(400)">Q 400.00</a></li>
											<li class="monto"><i class="material-icons tiny">label</i><a href="#!" onclick="retiro(500)">Q 500.00</a></li>
											<li id="monto" class="monto"><a href="#!">Seleccioné monto</a></li>
										</ul>
									</div>
									<a href="index.php" class="btn deep-orange">Atras</a>
								</form>
								<form id="mas">
									<div class="col m12 input-field">
										<i class="material-icons prefix"><b>Q</b></i>
								        <input id="icon_prefix" type="text" name="retiro" class="validate">
								        <label for="icon_prefix">Monto que deseo Retirar</label>
									</div>
									<a href="index.php" class="btn deep-orange">Atras</a>
									<button class="btn right">Retirar</button>
								</form>
							</div>
				        </div>
				      </div>
				</div>
			</div>
		</div>
	</main>

	<div id="denegado"></div>



	<script src="js/jquery-3.3.1.js"></script>
	<script src="materialize/js/materialize.js"></script>
	<script src="js/funciones.js"></script>
	<script>
		function retiro(retiro) {
		var controlador="procesos/procesar_retiro.php";
		if (confirm("¿Desea realizar el Retiro?"))
		{$.ajax({
			url:controlador,
			type:'POST',
			data:{retiro:retiro},
			success:function (retorno) {
				console.log(retorno);
				if(retorno=='Exitoso'){
					window.setTimeout("window.location='mensaje.php';", 100); 
					
				}
				else if(retorno=='<b> No se realizo el retiro. </b> No cuentas con el suficiente fondo.'){
					$('#denegado').html('No cuentas con el suficiente fondo').show(200).delay(10000).hide(200);
					
				} else if(retorno=='No se retiro nada.'){
					$('#denegado').html('Ingresa un número valido porfavor.').show(200).delay(10000).hide(200);
					
				} else if(retorno=='No se afecto'){
					$('#denegado').html('No se realizo el retiro.').show(200).delay(10000).hide(200);
					
				}
			}
		});}
	}
	</script>
	
</body>
</html>