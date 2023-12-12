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
    <title>Servicios Admin</title>
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
        <h2>Crear Servicio</h2>
        <form method="POST" action="process_serviciosAdmin.php">
            <label>Nombre del Servicio: </label>
            <input type="text" name="name"><br><br>
            <label>Descripcion: </label>
            <input type="text" name="descripcion"><br><br>
            <label>Link de la imagen: </label>
            <input type="text" name="imagen"><br><br><br>
            <input type="submit" value="Guardar">
        </form>
    </section>


    <section class="servicios">
        <h2>Eliminar Servicio</h2>
        <form method="POST" action="process_serviciosAdminEliminar.php">
            <label>Nombre del Servicio a Eliminar: </label>
            <input type="text" name="nameElimnar"><br><br>
            <input type="submit" value="Eliminar">
        </form>
    </section>


    <section class="servicios">
        <h2>Nuestros Servicios</h2>
        <div class="servicios-grid">
            <?php
            $sql = "SELECT * FROM servicios";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="servicios-item">
                        <p>ID: <?php echo $row["id"] ?></p>
                        <img src='<?php echo $row["image"] ?>'>
                        <h3><?php echo $row["nombre"] ?></h3>
                        <p><?php echo $row["descripcion"] ?></p>
                    </div>
            <?php }
            } ?>
        </div>
    </section>

</body>