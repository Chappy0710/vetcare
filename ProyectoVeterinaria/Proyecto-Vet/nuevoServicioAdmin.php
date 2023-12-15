<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="fondo">
    <br><br><br><br><br><br><br><br><br><br><br>
    <section>
        <form method="POST" action="process_serviciosAdmin.php" style="background-color: white;">
            <center>
                <h2>Añade un Servicio</h2>
                <h2>ʕ•́ᴥ•̀ʔっ♡</h2>
                <br>
            </center>
            <label>Nombre del Servicio: </label>
            <input type="text" name="name"><br><br>

            <label>Descripcion: </label>
            <input type="text" name="descripcion"><br><br>

            <label>Link de la imagen: </label>
            <textarea type="text" name="imagen" rows="4" required></textarea><br><br>

            <input type="submit" value="Guardar" style="background-color: #72ecaf; border-color: #4dab7a; width: 100%; height: 40px; color: white;  font-weight: bold; font-size: 18px;">
        </form>
    </section>

</body>
