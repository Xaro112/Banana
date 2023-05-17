<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $domicilio = $_POST["domicilio"];

    $sql = "INSERT INTO usuarios (nombre, edad, domicilio)". 
    "VALUES ('".$nombre."', ".$edad.",'".$domicilio."')";

    if($conexion->query($sql) === TRUE){
     echo "Registro guardado con éxito <a href='consultarDatos.php'>Regresar</a>";
    }
    else{
     echo "Error: " .$sql. "<br>" .$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>;";

    }

    $conexion->close();

?>