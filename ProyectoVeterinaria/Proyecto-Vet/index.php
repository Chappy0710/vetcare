<?php 
    include("menu.php");
    include("config.php");
    session_start();
    $menu = getMenu();
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
    <nav class="navbar navbar-expand-lg">
        <div class="container-xxl" style="background-color: #72ECAF">
            <img src="images/logo.png" alt="Logo Veterinaria" style='width: 200px; height: 200px;'>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mx-auto justify-content-center w-500" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="navbar-brand mb-0 h1" aria-current="page" id="letranav" href="index.php">Inicio</a>
                        <a class="navbar-brand mb-0 h1" aria-current="page" id="letranav" href="servicios.php">Servicios</a>
                        <a class="navbar-brand mb-0 h1" aria-current="page" id="letranav" href="#">Catálogo</a>
                        <a class="navbar-brand mb-0 h1" aria-current="page" id="letranav" href="#">Campañas</a>
                        <a class="navbar-brand mb-0 h1" aria-current="page" id="letranav" href="nosotros.php">Nosotros</a>
                        <a class="navbar-brand mb-0 h1" aria-current="page" id="letranav" href="contacto.php">Contacto</a>
                        <a class="navbar-brand mb-0 h1" aria-current="page" id="letranav" href="login.php">Ingresar</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    </header>
</body>