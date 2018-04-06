<?php 
	session_start();
	require_once '../Libreria/class.conexion.php';
	require_once '../Libreria/class.retiro.php';
	$base= new base();
	$base-> conectar();
	$retiro= new retiro();

	$monto=$_POST['retiro'];
	$fecha=date('Y-m-d');


	$consulta="SELECT Saldo FROM usuarios WHERE Cod_Usuario=".$_SESSION['codigo'];
	$ejecutar=$base->ejecutar($consulta);
	$fila=$base->obtener_array($ejecutar);

	if ($monto > $fila['Saldo']) {
		echo "<b> No se realizo el retiro. </b> No cuentas con el suficiente fondo.";
	} else if ($monto <= $fila['Saldo'] && $monto>= 1) {
		$consulta="INSERT INTO retiros(Cod_Retiros, Monto, Cod_Usuario, Cod_Tarjeta, Fecha_retiro) VALUES (NULL,$monto,".$_SESSION['codigo']." ,".$_SESSION['codigot'].", '".$fecha."')";

		$ejecutar=$base->ejecutar($consulta);

		echo $consulta;

		$actual = $retiro->actual($fila['Saldo'],$monto);

		$consulta="UPDATE usuarios SET Saldo=".$actual." WHERE Cod_Usuario=".$_SESSION['codigo'];
		$ejecutar=$base->ejecutar($consulta);

		$afectado = $base->confirmar();
		if ($afectado>0) {
			echo "Exitoso";
		} else {
			echo "No se afecto";
		}
		
	} else{ 
		echo "No se retiro nada.";

	}


		//header('Location:../mensaje.php')





	










 ?>