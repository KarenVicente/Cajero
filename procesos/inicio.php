<?php 

	require_once ('../Libreria/class.conexion.php');
	$base=new base();
	$base-> conectar();

	$tarjeta=$_POST['tarjeta'];
	$password=$_POST['password'];
	$codigo=$_POST['codigo'];



	$consulta="SELECT tarjetas.Numero as tarjeta , tarjetas.Contrasena as password, usuarios.Cod_Usuario, usuarios.Cod_Banco as banco
				FROM tarjetas, usuarios
				WHERE tarjetas.Cod_Usuario=usuarios.Cod_Usuario 
				AND tarjetas.Numero=".$tarjeta." 
				AND tarjetas.Contrasena='".$password."' 
				AND usuarios.Cod_Banco=".$codigo;

	$ejecutar=$base->ejecutar($consulta);
	$fila=$base->obtener_array($ejecutar);

	if ($fila['tarjeta']==$tarjeta && $fila['password']==$password) {
		echo "Bienvenidos a tu Cajero Automático.";

	} else {
		echo "No creo que seas usuario. Vuelve a intentarlo.";
	}






 ?>