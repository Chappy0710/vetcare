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
    <b><h1 style='text-align: center; color: white;'>Médicos Veterinarios</h1></b>
    <br>
    <center>
    <a href="nuevoMedicoAdmin.php" style="text-decoration: none;"><button style="background: transparent;"><h5 style='color: white;'>
    Agregar Médico <i class="fa-solid fa-plus" style="color: white"></i></h5></button></a>
    </center>

    <section class="servicios">
        <div class="servicios-grid" style='justify-items: center; width: 1300px; margin-left: auto; margin-right: auto; grid-template-columns: repeat(3, 1fr);'>
            <?php
            $sql = "SELECT * FROM medicos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="card" style="width: 18rem;">
                        <img src="https://cdn.discordapp.com/attachments/935264591305392151/1185057732361977937/medicos.jpg?ex=658e3a04&is=657bc504&hm=99b2bf8519f3967941654c2e01f342feb4cb7d5d0d62fad909ef5382d59937ec&" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["nombre"]. ' '.$row["primer_apellido"]. ' '.$row["segundo_apellido"]?></h5>

                            <h6><p class="card-text">Teléfono</p></h6>
                            <p class="card-text"><?php echo $row["telefono"] ?></p>

                            <h6><p class="card-text">Correo</p></h6>
                            <p class="card-text"><?php echo $row["correo"] ?></p>
                        </div>

                        <a href="process_medicosAdminEliminar.php?id_medico=<?php echo $row['id_medico']; ?>" class="d-grid gap-2">
                        <button class="fa-solid fa-trash" style="background-color: #DB1B1B; border-radius: 0 0 5px 5px;"></button></a>
                    </div>
            <?php }
            } ?>
        </div>
    </section>

</body>
        