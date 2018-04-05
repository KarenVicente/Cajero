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
					$('#acceso').show(100);
					$('#enlaces').hide();
					$('#banco').html('Banrural')
					$('#formularioBan').hide();
					
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
					$('#acceso').show(100);
					$('#enlaces').hide();
					$('#banco').html('G&T')
					$('#formularioGt').hide();
					
				}
				else if(retorno=='No creo que seas usuario. Vuelve a intentarlo.'){
					$('#denegado').html('No creo que seas usuario. Vuelve a intentarlo.').show(200).delay(10000).hide(200);
					
				}

			}
		});
	});
	$('#mas').hide(); 
	$('#monto').click(function() {
   		$('#retiro').hide();
   		$('#mas').show(1000);
   		
   	});

   




