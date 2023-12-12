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
        <h2>Agregar Nueva Campaña</h2>
        <form method="POST" action="process_campanasAdmin.php">
            <label>Nombre de la Campaña: </label>
            <input type="text" name="name"><br><br>
            <label>Descripcion: </label>
            <input type="text" name="descripcion"><br><br>
            <label>Fecha de la Campaña: </label>
            <input type="date" name="fecha"><br><br>
            <label>Lugar de la Campaña: </label>
            <input type="text" name="lugar"><br><br>
            <input type="submit" value="Guardar">
        </form>
    </section>


    <section class="servicios">
        <h2>Eliminar Campaña</h2>
        <form method="POST" action="process_campanasAdminEliminar.php">
            <label>Id de la campaña a eliminar: </label>
            <input type="text" name="IdElimnar"><br><br>
            <input type="submit" value="Eliminar">
        </form>
    </section>


    <section class="servicios">
        <h2>Nuestras Campañas</h2>
        <div class="servicios-grid">
            <?php
            $sql = "SELECT * FROM campanas";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="servicios-item">
                        <h3><?php echo $row["nombre"] ?></h3>
                        <h3>Fecha:<?php echo ' '.$row["fecha"] ?></h3>
                        <p><?php echo $row["lugar"] ?></p>
                        <p><?php echo $row["descripcion"] ?></p>
                        <p>ID Campaña:<?php echo ' '.$row["id_campana"] ?></p>
                    </div>
            <?php }
            } ?>
        </div>
    </section>

</body>