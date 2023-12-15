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

</head>

<body id="fondo">
    <header>
        <?php include("menup.php"); ?>
    </header>

    <br><br><br>
    <b><h1 style='text-align: center; color: white;'>Próximas Campañas</h1></b>

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
                    </div>
            <?php }
            } ?>
        </div>
    </section>

</body>
