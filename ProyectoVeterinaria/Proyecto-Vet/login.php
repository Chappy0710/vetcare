<?php 
    include("menu.php");
    include("config.php");
    $menu = getMenu();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="css/style.css">

</head>  

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="images/logo.png" alt="Logo Veterinaria">
            </div>
            <ul class="menu">
                <?php foreach ($menu as $item) { ?>
                    <li><a href="<?php echo $item["url"] ?>"><?php echo $item["name"] ?></a></li>         
                <?php    }   ?>
            </ul>
        </nav>
    </header>

    <section>
        <form method="POST" action="process_login.php">
            <label>Usuario: </label><br>
            <input type="text" name="username"><br>
            <label>Contraseña: </label><br>
            <input type="password" name="password"><br>
            <input type="submit" value="Ingresar"><br><br>
            <label>No tienes cuenta? </label><br>
            <a href="registro.php">Registrate</a> 
        </form>
    </section>

</body>