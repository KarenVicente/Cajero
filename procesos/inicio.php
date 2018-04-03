<?php 
	$tarjeta=$_POST['tarjeta'];
	$password=$_POST['password'];

	$consulta="SELECT Numero, Contrasena FROM tarjetas ";
	$ejecutar=mysqli_query($consulta);
	$fila=mysqli_fetch_array($ejecutar);

	if ($fila['Numero']=$tarjeta && $fila=['$password']) {
		echo "Bienvenidos a tu Cajero Automático."
	} else {
		echo "No creo que seas usuario. Vuelve a intentarlo."
	}






 ?>