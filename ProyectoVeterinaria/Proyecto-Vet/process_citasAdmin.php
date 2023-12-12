<?php
include("config.php");
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexion " . $conn->connect_error);
}

$id_servicio_post = $_POST["id_servicio"];
$id_user_post = $_POST["id_user"];
$fecha_post = $_POST["fecha"];
$hora_post = $_POST["hora"];
$id_medico_post = $_POST["id_medico"];
$costo_post = $_POST["costo"];

//Insersion

$sql = "INSERT INTO citas (id_servicio, id_user, fecha, hora, id_medico, estado,costo)
    VALUES ('$id_servicio_post', '$id_user_post', '$fecha_post', '$hora_post', '$id_medico_post', 'Pendiente','$costo_post')";

if ($conn->query($sql) == TRUE) {
    header("Location: citasAdmin.php");
    echo "Insertó Correctamente";
} else {
    echo "Error de insertar registro" . $conn->connect_error;
}
