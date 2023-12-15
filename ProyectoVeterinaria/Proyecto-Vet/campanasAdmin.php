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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body id="fondo">
    <header>
        <?php include("menuAdmin.php"); ?>
    </header>

    <br><br><br>
    <b><h1 style='text-align: center; color: white;'>Futuras Campañas</h1></b>
    <br>
    <center>
    <a href="nuevaCampana.php" style="text-decoration: none;"><button style="background: transparent;"><h5 style='color: white;'>
    Agregar Campaña <i class="fa-solid fa-plus" style="color: white"></i></h5></button></a>
    </center>


    <section class="servicios">
        <div class="servicios-grid" style='justify-items: center; width: 1300px; margin-left: auto; margin-right: auto; grid-template-columns: repeat(3, 1fr);'>
            <?php
            $sql = "SELECT * FROM campanas";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["nombre"] ?></h5>
                            <br>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Fecha: <?php echo ' '.$row["fecha"] ?></h6>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Ubucación: <?php echo $row["lugar"] ?></h6>
                            <p class="card-text"><?php echo $row["descripcion"] ?></p>
                        </div>
                        <a href="process_campanasAdminEliminar.php?id_campana=<?php echo $row['id_campana']; ?>" class="d-grid gap-2">
                        <button class="fa-solid fa-trash" style="background-color: #DB1B1B; border-radius: 0 0 5px 5px;"></button></a>
                    </div>
            <?php }
            } ?>
        </div>
    </section>

</body>
