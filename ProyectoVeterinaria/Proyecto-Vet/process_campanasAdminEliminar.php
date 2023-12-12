<?php

include("config.php");
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexion " . $conn->connect_error);
}

$IdElimnar_postEliminar = $_POST["IdElimnar"];

$sql = "DELETE FROM campanas where id_campana='$IdElimnar_postEliminar'";
if ($conn->query($sql) == TRUE) {
    header("Location: campanasAdmin.php");
    echo "Se elimino la campaña";
} else {
    echo "No se elimino la campaña";
}
