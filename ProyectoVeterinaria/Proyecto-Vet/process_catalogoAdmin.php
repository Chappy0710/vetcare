<?php
include("config.php");
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexion " . $conn->connect_error);
}

$producto_post = $_POST["producto"];
$descripcion_post = $_POST["descripcion"];
$imagen_post = $_POST["imagen"]; 

//Insersion

$sql = "INSERT INTO catalogo (producto, descripcion, image)
    VALUES ('$producto_post', '$descripcion_post', '$imagen_post')";

if ($conn->query($sql) == TRUE) {
    header("Location: catalogoAdmin.php");
    echo "Insertó Correctamente";
} else {
    echo "Error de insertar registro" . $conn->connect_error;
}
