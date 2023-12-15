<?php 
    include("config.php");
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

<body id="fondologinregistrar">    
    <br></br>
    <br></br>
    <br></br>
    <section>
        <div class="container d-flex align-items-center justify-content-center">
            <form method="POST" action="process_login.php" class="bg-white ounded">
                <form method="POST" action="process_login.php">
                    <div>
                        <img class="container d-flex align-items-center justify-content-center" src="images/logo.png" alt="Logo Veterinaria" style='width: 200px;'>
                        <p class="container d-flex align-items-center justify-content-center" style="font-size: 20px;"><b>Iniciar Sesión en VetCare</b></p>
                    </div>
                    <br>
                    <label>Usuario: </label><br>
                    <input type="text" name="username"><br>
                    <br>
                    <label>Contraseña: </label><br>
                    <input type="password" name="password"><br>
                    <br>
                    <br>
                    <input class="container d-flex align-items-center justify-content-center" id="ingresar" type="submit" value="Ingresar"><br><br>
                </form>
            </form>
        </div>
        <br>
        <div class="container d-flex align-items-center justify-content-center">
            <form method="POST" action="process_login.php" class="bg-white ounded">
                <label class="container d-flex justify-content-center">No tienes cuenta?</label>
                <a href="registro.php" class="container d-flex align-items-center justify-content-center">Registrate</a> 
            </form>
        </div>
    </section>
</body>