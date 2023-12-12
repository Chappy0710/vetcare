<?php
include("menu.php");
include("config.php");
$menu = getMenu();

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

    <section>
        <h2>Dejar Reseña</h2>
        <form method="POST" action="process_resenas.php">
            <label>Reseña: </label>
            <input type="text" name="resena"><br><br>

            <label>Calificación: </label>
            <select name="calificacion">
                <?php
                // Utilizando un bucle para generar opciones del 1 al 10
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option value=\"$i\">$i</option>";
                }
                ?>
            </select><br><br>

            <input type="submit" value="Agregar reseña">
        </form>
    </section>


    <section class="servicios">
        <h2>Reseñas anteriores</h2>
        <div class="servicios-grid">
            <?php
            $sql = "SELECT * FROM resenas";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="servicios-item">
                        <h3>Reseña: </h3>
                        <p><?php echo $row["resena"] ?></p>
                        <h3>Calificación del 1 al 10: </h3>
                        <p><?php echo $row["calificacion"] ?></p>
                    </div>
            <?php }
            } ?>
        </div>
    </section>

</body>