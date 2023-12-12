<?php 
    include("menu.php");
    include("config.php");
    $menu = getMenu();

    $conn = new mysqli($servername, $username, $password, $database);   
        if($conn->connect_error){
            die("Error de conexion ".$conn->connect_error);
        }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
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

    <section class="servicios">
        <h2>Nuestros Catálogo</h2>
        <div class="servicios-grid">
            <?php
            $sql = "SELECT * FROM catalogo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="servicios-item">
                        <img src='<?php echo $row["image"] ?>'>
                        <h3><?php echo $row["producto"] ?></h3>
                        <p><?php echo $row["descripcion"] ?></p>
                    </div>
            <?php }
            } ?>
        </div>
    </section>

</body>