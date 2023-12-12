<?php
include("config.php");
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexion " . $conn->connect_error);
}

$id_cita_post = $_POST["id_cita"];



$sql = "UPDATE citas set estado='Atendida' where id_cita='$id_cita_post'";
if($conn->query($sql)==TRUE){
    header("Location: citasAdmin.php");
    echo "Se actualizo el registro.";
} else {
    echo "No se actualizo.";
}

