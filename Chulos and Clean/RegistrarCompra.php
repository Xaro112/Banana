<?php

    include 'conexion.php';

    $correo = $_POST["Correo electronico"];
    $direccion = $_POST["Dirección"];
    $tarjeta = $_POST["Número darjeta"];
    $cvv = $_POST["CVV"];
    $fecha = $_POST["Fecha de caducidad"];
    $nombre = $_POST["Nombre de propietario"];

    $sql = "INSERT INTO usuarios (nombre, edad, sexo, aditamentos, huespedes, fecha_reserva)". 
    "VALUES ('".$nombre."', ".$edad.", ".$sexo.",'".$aditamentos."','".$huespedes."', '".$fecha_reserva."')";

    if($conexion->query($sql) === TRUE){
     echo "Registro guardado con éxito <a href='consultarDatos.php'>Regresar</a>";
    }
    else{
     echo "Error: " .$sql. "<br>" .$consexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>;";

    }

    $conexion->close();

?>