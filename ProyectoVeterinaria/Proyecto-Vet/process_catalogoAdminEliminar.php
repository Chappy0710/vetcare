<?php

include("config.php");
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexion " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $producto_id = $_GET['id'];

    $sqlDelete = "DELETE FROM catalogo where id='$producto_id'";

    if ($conn->query($sqlDelete) === TRUE) {
        echo "<script>alert('El producto ha sido eliminado con éxito.'); window.location.href='catalogoAdmin.php';</script>";
    } else {
        $error_message = urlencode($conn->error);
        echo $error_message;
    }

    $conn->close();
}
?>
