<?php
	session_start();

	/*Conexion de DB*/
	$conexion=mysqli_connect("localhost","root","","derechoscopio") or
    die("Problemas con la conexión");

	/*Busca que exista el usuario*/
	$registros=mysqli_query($conexion,"select *
	                        from profesores where control='$_REQUEST[usuario]' and clave='$_REQUEST[clave]'") or
	  die("Problemas en el select:".mysqli_error($conexion));
	
	$resultado = mysqli_num_rows($registros); /*Se almacena la cantidad de rows que se encontraron con esos datos en la DB*/
	$res = mysqli_fetch_array($registros); /*Se almacena los datos encontrados de la DB*/
	
	if($resultado > 0) /*Si se encontro el usuario y la contrasena redirecciona*/
	{
		$_SESSION['usuario'] = $_REQUEST[usuario];
		if($res['admin']=="si" || $res['admin']=="Si" || $res['admin']=="SI") /*En mi tabla tengo un campo como admin, el cual se guarda un si o un no, dependiendo si eres admin*/
		{
			header("location:inicioS.php"); /*Te redirecciona a la pagina de admin*/
		}
		else{
			header("location:inicioU.php"); /*Te redirecciona a la pagina de usuario*/
		}
	}
	else{ /*Si no se encontro el usuario y la contrasena redirecciona*/
		$_SESSION['usuario'] = '';
		header("location:login.php"); /*Regresa al login*/
	}
	/*Se libera el espacio y cierre de conexion*/
	mysqli_free_result($registros);
	mysqli_close($conexion);
?>