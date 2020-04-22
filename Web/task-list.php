<?php
    $conexion=mysqli_connect("localhost","root","","derechoscopio") or
    die("Problemas con la conexión");

    $query = "select ID,Nombre,Correo from usuario order by ID asc";
    $resultado = mysqli_query($conexion, $query);

    if(!$resultado) {
        die('Error'.mysqli_error($conexion));
    }

    $json = array();
    while($row = mysqli_fetch_array($resultado)){
        $json[] = array(
            'ID' => $row['ID'],
            'Nombre' => $row['Nombre'],
            'Correo' => $row['Correo']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>