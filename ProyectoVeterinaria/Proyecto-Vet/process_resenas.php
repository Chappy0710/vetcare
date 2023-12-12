<?php
include("config.php");
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexion " . $conn->connect_error);
}

$resena_post = $_POST["resena"];
$calificacion_post = $_POST["calificacion"];

//Insersion

$sql = "INSERT INTO resenas (resena, calificacion)
    VALUES ('$resena_post', '$calificacion_post')";

if ($conn->query($sql) == TRUE) {
    header("Location: resenas.php");
    echo "Insertó Correctamente";
} else {
    echo "Error de insertar registro" . $conn->connect_error;
}
