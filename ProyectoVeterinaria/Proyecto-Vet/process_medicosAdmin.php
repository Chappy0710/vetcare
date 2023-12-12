<?php
include("config.php");
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexion " . $conn->connect_error);
}

$name_post = $_POST["nombre"];
$primer_apellido_post = $_POST["primer_apellido"];
$segundo_apellido_post = $_POST["segundo_apellido"];
$telefono_post = $_POST["telefono"];
$correo_post = $_POST["correo"]; 

//Insersion

$sql = "INSERT INTO medicos (nombre, primer_apellido, segundo_apellido, telefono, correo)
    VALUES ('$name_post', '$primer_apellido_post', '$segundo_apellido_post', '$telefono_post', '$correo_post')";

if ($conn->query($sql) == TRUE) {
    header("Location: medicosAdmin.php");
    echo "Insertó Correctamente";
} else {
    echo "Error de insertar registro" . $conn->connect_error;
}
