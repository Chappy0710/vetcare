<?php
    include("config.php");
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

<body id="fondo">
    <header>
        <?php include("menup.php"); ?>
    </header>
    <br><br><br>
    
    <b><h1 style='text-align: center; color: white;'>Catalogo de Productos</h1></b>
    <h6 style='text-align: center; color: white;'>Tenemos los productos de la mas alta calidad para tu mascota<h6>
    
    <section class="servicios">
        <div class="servicios-grid" style='justify-items: center; width: 1300px; margin-left: auto; margin-right: auto; grid-template-columns: repeat(3, 1fr);'>
            <?php
            $sql = "SELECT * FROM catalogo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $row["image"] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["producto"] ?></h5>
                            <p class="card-text"><?php echo $row["descripcion"] ?></p>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </section>

</body>

