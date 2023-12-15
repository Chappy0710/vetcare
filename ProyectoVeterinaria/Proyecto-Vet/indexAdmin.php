<?php
include("config.php");
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexion " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
</head>

<body id="fondo">
    <header>
        <?php include("menuAdmin.php"); ?>
    </header>
    <br><br><br><br><br><br><br><br><br><br>
    <center>
        <h1 style="color: white; font-size: 200px;">Bienvenido!</h1>
    </center>
    
</body>