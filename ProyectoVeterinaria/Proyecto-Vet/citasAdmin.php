<?php
include("menuAdmin.php");
include("config.php");
$menu = getMenuAdmin();

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
    <title>Citas Admin</title>
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
        <h2>Agregar Cita Nueva</h2>
        <form method="POST" action="process_citasAdmin.php">
            <label>Id del servicio: </label>
            <input type="text" name="id_servicio"><br><br>
            <label>Id del usuario que solicita la cita: </label>
            <input type="text" name="id_user"><br><br>
            <label>Fecha de la Cita: </label>
            <input type="date" name="fecha"><br><br>
            <label>Hora de la Cita: </label>
            <input type="time" name="hora"><br><br>
            <label>Id del Médico para la cita: </label>
            <input type="text" name="id_medico"><br><br>
            <label>Costo de la Cita</label>
            <input type="text" name="costo"><br><br>
            <input type="submit" value="Agregar Cita">
        </form>

    </section>


    <section class="servicios">
        <h2>Cambiar cita a "Atendida"</h2>
        <form method="POST" action="process_citasAdminModificar.php">
            <label>Id de cita a modificar: </label>
            <input type="text" name="id_cita"><br><br>
            <input type="submit" value="Cambiar estado">
        </form>
    </section>


    <section class="servicios">
        <h2>Citas</h2>
        <div class="servicios-grid">
            <?php
            $sql = "SELECT *
            FROM citas
            ORDER BY CASE WHEN estado = 'Pendiente' THEN 0 ELSE 1 END, fecha, hora"; //Muestra primero las citas en estado "Pendiente" y las ordena por fecha y hora
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="servicios-item">
                        
                        <h3>Fecha<?php echo ' '.$row["fecha"] ?></h3>
                        <h3>Hora<?php echo ' '.$row["hora"] ?></h3>
                        <h3>Estado: <?php echo ' '.$row["estado"] ?></h3>
                        <p>ID Cita: <?php echo $row["id_cita"] ?></p>
                        <p>ID Servicio: <?php echo $row["id_servicio"] ?></p>
                        <p>ID Usuario: <?php echo $row["id_user"] ?></p>
                        <p>ID Médico: <?php echo $row["id_medico"] ?></p>
                        <h3>Costo<?php echo ' '.$row["costo"] ?></h3>
                    </div>
            <?php }
            } ?>
        </div>
    </section>

</body>