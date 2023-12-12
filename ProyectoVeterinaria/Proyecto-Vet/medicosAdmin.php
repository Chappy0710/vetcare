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
    <title>Medicos Admin</title>
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
        <h2>Agregar Médico</h2>
        <form method="POST" action="process_medicosAdmin.php">
            <label>Nombre del Médico: </label>
            <input type="text" name="nombre"><br><br>
            <label>Primer Apellido: </label>
            <input type="text" name="primer_apellido"><br><br>
            <label>Segundo Apellido: </label>
            <input type="text" name="segundo_apellido"><br><br>
            <label>Teléfono: </label>
            <input type="text" name="telefono"><br><br>
            <label>Correo: </label>
            <input type="text" name="correo"><br><br><br>
            <input type="submit" value="Guardar">
        </form>
    </section>


    <section class="servicios">
        <h2>Eliminar Médico</h2>
        <form method="POST" action="process_medicosAdminEliminar.php">
            <label>Id del Médico a Eliminar: </label>
            <input type="text" name="idElimnar"><br><br>
            <input type="submit" value="Eliminar">
        </form>
    </section>


    <section class="servicios">
        <h2>Nuestros Medicos</h2>
        <div class="servicios-grid">
            <?php
            $sql = "SELECT * FROM medicos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="servicios-item">
                        <p>ID: <?php echo $row["id_medico"] ?></p>
                        <h3><?php echo $row["nombre"]. ' '.$row["primer_apellido"]. ' '.$row["segundo_apellido"]?></h3>
                        <h3>Numero de Teléfono: </h3>
                        <p><?php echo $row["telefono"] ?></p>
                        <h3>Correo: </h3>
                        <p><?php echo $row["correo"] ?></p><br>
                    </div>
            <?php }
            } ?>
        </div>
    </section>

</body>