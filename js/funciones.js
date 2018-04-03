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
			data:$('#formularioBan).serialize(),
			success:console.log(retorno);
		});
	});

	$('#formularioGt').submit(function(e) {

		e.preventDefault();

		var controlador="procesos/inicio.php";

		$.ajax({
			url:controlador,
			type:'POST',
			data:$('#formularioBan).serialize(),
			success:console.log(retorno);
		});
	});

