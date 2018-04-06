<?php 
	session_start();

	require_once ('../Libreria/class.conexion.php');
	$base=new base();
	$base-> conectar();

	$tarjeta=$_POST['tarjeta'];
	$password=$_POST['password'];
	$codigo=$_POST['codigo'];



	$consulta="SELECT tarjetas.Numero as tarjeta ,tarjetas.Cod_Tarjeta as codt ,tarjetas.Contrasena as password, usuarios.Cod_Usuario as codigo, usuarios.Cod_Banco as banco, bancos.Nombre as nombreb
				FROM tarjetas, usuarios, bancos
				WHERE tarjetas.Cod_Usuario=usuarios.Cod_Usuario
				AND usuarios.Cod_Banco=bancos.Cod_Banco 
				AND tarjetas.Numero=".$tarjeta." 
				AND tarjetas.Contrasena='".$password."' 
				AND usuarios.Cod_Banco=".$codigo;

	$ejecutar=$base->ejecutar($consulta);
	$fila=$base->obtener_array($ejecutar);

	if ($fila['tarjeta']==$tarjeta && $fila['password']==$password) {
		echo "Bienvenidos a tu Cajero Automático.";
		$_SESSION['banco']=$fila['banco'];
		$_SESSION['tarjeta']=$fila['tarjeta'];
		$_SESSION['password']=$fila['password'];
		$_SESSION['codigo']=$fila['codigo'];
		$_SESSION['nombreb']=$fila['nombreb'];
		$_SESSION['codigot']=$fila['codt'];

	} else {
		echo "No creo que seas usuario. Vuelve a intentarlo.";
	}






 ?>