<?php
include("config.php");
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexion " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_cita'])) {
    $cita_id = $_GET['id_cita'];

    $sqlDelete = "UPDATE citas set estado='Atendida' where id_cita='$cita_id'";

    if ($conn->query($sqlDelete) === TRUE) {
        echo "<script>alert('La cita ha sido actualizada con éxito.'); window.location.href='citasAdmin.php';</script>";
    } else {
        $error_message = urlencode($conn->error);
        echo $error_message;
    }

    $conn->close();
}
?>