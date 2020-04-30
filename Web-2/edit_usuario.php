<?php
/*Llamado de _edit.php*/
/*Hace update de los datos que se modificaron*/
    $nombre = $_REQUEST['usuario'];
    $apellido = $_REQUEST['apellido'];
    $correo = $_REQUEST['correo1'];
    $contrasena = $_REQUEST['contrasena1'];

    $conexion=mysqli_connect("localhost","root","","derechoscopio") or
    die("Problemas con la conexión");

    if(filter_var($correo, FILTER_VALIDATE_EMAIL) && strlen($contrasena) > 7)
        {
            mysqli_query($conexion,"update usuario set 
        Nombre='$nombre',
        Apellidos='$apellido',
        Clave='$contrasena',
        Correo= '$correo',
        TipoUsuario='S'
        where ID='$_GET[var]'")
        or die("Problemas en el select".mysqli_error($conexion));
        mysqli_close($conexion);
        echo "El usuario fue modificado con exito";
        }
        else
        {}
    
?>
