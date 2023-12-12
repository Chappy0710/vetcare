<?php

include("config.php");
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexion " . $conn->connect_error);
}

$producto_postEliminar = $_POST["productoElimnar"];

$sql = "DELETE FROM catalogo where producto='$producto_postEliminar'";
if ($conn->query($sql) == TRUE) {
    header("Location: catalogoAdmin.php");
    echo "Se elimino el Producto";
} else {
    echo "No se elimino el Producto";
}
