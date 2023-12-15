<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
</head>  

<body id="fondologinregistrar">
    <br></br>
    <br></br>
    <br></br>
    <section>
        <form method="POST" action="process_registroAdmin.php" class="bg-white ounded">
        <div>
            <img class="container d-flex align-items-center justify-content-center" src="images/logo.png" alt="Logo Veterinaria" style='width: 200px;'>
            <center>
                <p class="container d-flex align-items-center justify-content-center" style="font-size: 20px;"><b>Registrar un Admin en VetCare</b></p>
            </center>
            
        </div>
        <br>
            <label>Nombre: </label><br>
            <input type="text" name="name"><br>
            <br>
            <label>Email: </label><br>
            <input type="text" name="email"><br>
            <br>
            <label>Usuario: </label><br>
            <input type="text" name="username"><br>
            <br>
            <label>Contraseña: </label><br>
            <input type="password" name="password"><br>
            <br>
            <br>
            <input type="submit" id="ingresar" value="Registrarse">
        </form>
        <br>
        <div class="container d-flex align-items-center justify-content-center">
            <form method="POST" action="process_login.php" class="bg-white ounded">
                <label class="container d-flex justify-content-center">Ya tienes cuenta?</label>
                <a href="login.php" class="container d-flex align-items-center justify-content-center">Iniciar Sesión</a> 
            </form>
        </div>
    </section>
</body>