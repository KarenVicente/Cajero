$ (function() {
	$('#formularioBan').hide();
	$('#formularioGt').hide();

	$('#b').click(function() {
   		$("#formularioBan").slideToggle("slow");
   		$('#formularioGt').hide();
   		$('#informacion').hide();
   		$("#b").toggleClass("link");
   		$("#g").removeClass("link");

   	});
   	$('#g').click(function() {
   		$("#formularioGt").slideToggle("slow");
   		$('#formularioBan').hide();
   		$('#informacion').hide();
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
					$('#banco').html('G&T')
					$('#formularioGt').hide();
					
				}
				else if(retorno=='No creo que seas usuario. Vuelve a intentarlo.'){
					$('#denegado').html('No creo que seas usuario. Vuelve a intentarlo.').show(200).delay(10000).hide(200);
					
				}

			}
		});
	});

