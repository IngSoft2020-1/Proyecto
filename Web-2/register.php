<!--Registra un nuevo usuario-->
<?php
    session_start();
    $_SESSION['creado'] = '0';
    $usuario = $_REQUEST['usuario']." ".$_REQUEST['apellido'];
    $correo1 = $_REQUEST['correo1'];
    $correo2 = $_REQUEST['correo2'];
    $contrasena1 = $_REQUEST['contrasena1'];
    $contrasena2 = $_REQUEST['contrasena2'];

    if (filter_var($correo1, FILTER_VALIDATE_EMAIL)) 
    {
        if($correo1 == $correo2 && strlen($contrasena1) > 7 && $contrasena1 == $contrasena2)
        {
            $conexion=mysqli_connect("localhost","root","","derechoscopio") or
            die("Problemas con la conexión");

            $registros=mysqli_query($conexion,"select ID
                                    from usuario where Correo='$correo1'") or
            die("Problemas en el select:".mysqli_error($conexion));
            $resultado = mysqli_num_rows($registros);

            if($resultado > 0)
            {
                $_SESSION['creado'] = '2'; /*Usuario ya existe*/
                mysqli_free_result($registros);
                mysqli_close($conexion);
                header("location:new.php");
            }
            else{
                mysqli_query($conexion,"insert into usuario(Nombre,Clave,Correo,TipoUsuario) values 
                                ('$usuario','$contrasena1','$correo1','S')")
                or die("Problemas en el select".mysqli_error($conexion));

                $_SESSION['creado'] = '1'; /*Usuario registrado*/
            }
            mysqli_free_result($registros);
            mysqli_close($conexion);
        }
        else
        {}
    }
    else
    {}
    header("location:new.php");
?>