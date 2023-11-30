<?php
    include("config.php");
    $conn = new mysqli($servername, $username, $password, $database);   
        if($conn->connect_error){
            die("Error de conexion ".$conn->connect_error);
        }

    $name_post = $_POST["name"];
    $descripcion_post = $_POST["descripcion"];
    $imagen_post = $_POST["imagen"]; //con username se refiere al name="username" de registro.php

    //Insersion

    $sql = "INSERT INTO servicios (nombre, descripcion, image)
    VALUES ('$name_post', '$descripcion_post', '$imagen_post')";

    if($conn->query($sql)==TRUE){
        header("Location: serviciosAdmin.php");
        echo "Insertó Correctamente";
    } else {
        echo "Error de insertar registro".$conn->connect_error;
    }