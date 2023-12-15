<?php
include("config.php");
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexion " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_medico'])) {
    $medico_id = $_GET['id_medico'];

    $sqlDelete = "DELETE FROM medicos where id_medico='$medico_id'";

    if ($conn->query($sqlDelete) === TRUE) {

        echo "<script>alert('El medico ha sido eliminado con éxito.'); window.location.href='medicosAdmin.php';</script>";
    } else {
        $error_message = urlencode($conn->error);
        echo $error_message;
    }

    $conn->close();
}
?>
