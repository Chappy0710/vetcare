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
    <title>Servicios Admin</title>
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
    <b><h1 style='text-align: center; color: white;'>Citas Agendadas</h1></b>
    <br>
    <center>
    <a href="nuevaCitaAdmin.php" style="text-decoration: none;"><button style="background: transparent;"><h5 style='color: white;'>
    Agregar Cita <i class="fa-solid fa-plus" style="color: white"></i></h5></button></a>
    </center>

    <section class="servicios">
        <div class="servicios-grid" style='justify-items: center; width: 1300px; margin-left: auto; margin-right: auto; grid-template-columns: repeat(3, 1fr);'>
            <?php
            $sql = "SELECT *
            FROM citas
            ORDER BY CASE WHEN estado = 'Pendiente' THEN 0 ELSE 1 END, fecha, hora"; //Muestra primero las citas en estado "Pendiente" y las ordena por fecha y hora
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="card" style="width: 18rem;">
                        <img src="https://cdn.discordapp.com/attachments/935264591305392151/1185074778424483840/citas.jpg?ex=658e49e4&is=657bd4e4&hm=84d4e5d365b3e0c2e553cbbb8be75ece2e464bc43dcd99ca6efad0d0928cc89a&" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo ' '.$row["estado"] ?></h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Cita</h6>
                            <p class="card-text"><?php echo ' '.$row["fecha"] ?> a las <?php echo ' '.$row["hora"] ?> <br> <b>Servicio: </b>#<?php echo $row["id_servicio"] ?> <br> 
                            <b>Cliente: </b>#<?php echo $row["id_user"] ?> <br> <b>Medico: </b>#<?php echo $row["id_medico"] ?></p>
                            <h5 class="card-title">Costo = <?php echo ' '.$row["costo"] ?></h5>
                        </div>
                        <a href="process_citasAdminModificar.php?id_cita=<?php echo $row['id_cita']; ?>" class="d-grid gap-2">
                        <button class="fa-solid fa-check" style="background-color: #7ED957; border-radius: 0 0 5px 5px;"></button></a>
                    </div>
            <?php }
            } ?>
        </div>
    </section>

</body>



