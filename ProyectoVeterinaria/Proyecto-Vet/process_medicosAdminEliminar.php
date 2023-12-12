<?php

include("config.php");
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexion " . $conn->connect_error);
}

$id_postEliminar = $_POST["idElimnar"];

$sql = "DELETE FROM medicos where id_medico='$id_postEliminar'";
if ($conn->query($sql) == TRUE) {
    header("Location: medicosAdmin.php");
    echo "Se elimino el Medico";
} else {
    echo "No se elimino el Medico";
}
