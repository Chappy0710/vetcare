<?php
include("config.php");
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexion " . $conn->connect_error);
}

$name_post = $_POST["name"];
$descripcion_post = $_POST["descripcion"];
$fecha_post = $_POST["fecha"];
$lugar_post = $_POST["lugar"];

//Insersion

$sql = "INSERT INTO campanas (nombre, descripcion, fecha, lugar)
    VALUES ('$name_post', '$descripcion_post', '$fecha_post', '$lugar_post')";

if ($conn->query($sql) == TRUE) {
    header("Location: campanasAdmin.php");
    echo "Insertó Correctamente";
} else {
    echo "Error de insertar registro" . $conn->connect_error;
}
