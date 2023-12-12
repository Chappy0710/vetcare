<?php

include("config.php");
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexion " . $conn->connect_error);
}

$name_postEliminar = $_POST["nameElimnar"];

$sql = "DELETE FROM servicios where nombre='$name_postEliminar'";
if ($conn->query($sql) == TRUE) {
    header("Location: serviciosAdmin.php");
    echo "Se elimino el Servicio";
} else {
    echo "No se elimino el Servicio";
}
