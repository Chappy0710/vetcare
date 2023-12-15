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
    <title>Servicios</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="fondo">
    <header>
        <?php include("menup.php"); ?>
    </header>
    <br><br><br>
    <b><h1 style='text-align: center; color: white;'>Reseñas de Nuestros Clientes </h1></b>
    <br>
    <center>
    <a href="nuevaResena.php" style="text-decoration: none;"><button style="background: transparent;"><h5 style='color: white;'>
    Dejamos tu Opinión <i class="fa-solid fa-plus" style="color: white"></i></h5></button></a>
    
    </center>

    <section class="servicios">

        <div class="servicios-grid" style='justify-items: center; width: 1300px; margin-left: auto; margin-right: auto; grid-template-columns: repeat(2, 1fr);'>
            <?php
            $sql = "SELECT * FROM resenas";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="card" style="width: 30rem;">
                        <div class="card-body">
                            <p class="card-text"><?php echo $row["resena"] ?></p>
                            <p class="card-text" style="font-size: 18px;"><i class="fa-solid fa-star" style="color: #FFDE5A;">  </i><?php echo $row["calificacion"] ?></p>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </section>

</body>