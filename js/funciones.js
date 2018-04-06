$ (function() {
	$('#formularioBan').hide();
	$('#formularioGt').hide();

	$('#b').click(function() {
   		$("#formularioBan").slideToggle("slow");
   		$('#formularioGt').hide();
   		$('#informacion').hide();
   		$('#imagen').hide();
   		$("#b").toggleClass("link");
   		$("#g").removeClass("link");

   	});
   	$('#g').click(function() {
   		$("#formularioGt").slideToggle("slow");
   		$('#formularioBan').hide();
   		$('#informacion').hide();
   		$('#imagen').hide();
   		$("#g").toggleClass("link");
   		$("#b").removeClass("link");

   	});


	
})

	$('#formularioBan').submit(function(e) {

		e.preventDefault();

		var controlador="procesos/inicio.php";

		$.ajax({
			url:controlador,
			type:'POST',
			data:$('#formularioBan').serialize(),
			success:function (retorno) {
				console.log(retorno);
				if(retorno=='Bienvenidos a tu Cajero Automático.'){
					//$('#acceso').show(100);
					$('#enlaces').hide();
					//$('#banco').html('Banrural')
					$('#formularioBan').hide();
					window.setTimeout("window.location='index.php';", 100)
					
				}
				else if(retorno=='No creo que seas usuario. Vuelve a intentarlo.'){
					$('#denegado').html('No creo que seas usuario. Vuelve a intentarlo.').show(200).delay(10000).hide(200);

					
				}

			}
		});
	});

	$('#formularioGt').submit(function(e) {

		e.preventDefault();

		var controlador="procesos/inicio.php";

		$.ajax({
			url:controlador,
			type:'POST',
			data:$('#formularioGt').serialize(),
			success:function (retorno) {
				console.log(retorno);
				if(retorno=='Bienvenidos a tu Cajero Automático.'){
					//$('#acceso').show(100);
					$('#enlaces').hide();
					//$('#banco').html('G&T')
					$('#formularioGt').hide();
					window.setTimeout("window.location='index.php';", 100)
					
				}
				else if(retorno=='No creo que seas usuario. Vuelve a intentarlo.'){
					$('#denegado').html('No creo que seas usuario. Vuelve a intentarlo.').show(200).delay(10000).hide(200);
					
				}

			}
		});
	});

	$('#mas').submit(function(e) {

		e.preventDefault();

		var controlador="procesos/procesar_retiro.php";

		$.ajax({
			url:controlador,
			type:'POST',
			data:$('#mas').serialize(),
			success:function (retorno) {
				console.log(retorno);
				if(retorno=='Exitoso'){
					//window.setTimeout("window.location='mensaje.php';", 100); 
					
				}
				else if(retorno=='<b> No se realizo el retiro. </b> No cuentas con el suficiente fondo.'){
					$('#denegado').html('No cuentas con el suficiente fondo').show(200).delay(10000).hide(200);
					
				} else if(retorno=='No se retiro nada.'){
					$('#denegado').html('Ingresa un número valido porfavor.').show(200).delay(10000).hide(200);
					
				} else if(retorno=='No se afecto'){
					$('#denegado').html('No se realizo el retiro.').show(200).delay(10000).hide(200);
					
				}


			}
		});
	});

	$('#mas').hide(); 
	$('#monto').click(function() {
   		$('#retiro').hide();
   		$('#mas').show(1000);
   		
   	});

   




