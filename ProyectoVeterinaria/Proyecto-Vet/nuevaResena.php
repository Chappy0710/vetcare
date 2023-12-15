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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <section>
        <form method="POST" action="process_resenas.php" style="background-color: white;">
            <center>
                <h2>Dejamos tu Opinión ʕ•́ᴥ•̀ʔっ♡</h2>
            </center>
            <label>Reseña: </label>
            <textarea type="text" name="resena" rows="4" required style="width: 95%;"></textarea><br><br>

            <label>Calificación: </label>
            <select name="calificacion">
                <?php
                // Utilizando un bucle para generar opciones del 1 al 10
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option value=\"$i\">$i</option>";
                }
                ?>
            </select><br><br>

            <input type="submit" value="Agregar reseña" style="background-color: #72ecaf; border-color: #4dab7a; width: 100%; height: 40px; color: white;  font-weight: bold; font-size: 18px;">
        </form>
    </section>

</body>

