<?php

include("config.php");
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexion " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_campana'])) {
    $campana_id = $_GET['id_campana'];

    $sqlDelete = "DELETE FROM campanas where id_campana='$campana_id'";

    if ($conn->query($sqlDelete) === TRUE) {
        echo "<script>alert('La campaña ha sido eliminada con éxito.'); window.location.href='campanasAdmin.php';</script>";
    } else {
        $error_message = urlencode($conn->error);
        echo $error_message;
    }

    $conn->close();
}
?>
