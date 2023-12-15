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
    <br><br><br><br><br><br>
    <section>
        <form method="POST" action="process_citasAdmin.php" style="background-color: white;">
            <center>
                <h2>Añade una Cita</h2>
                <h2>ʕ•́ᴥ•̀ʔっ♡</h2>
                <br>
            </center>
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

            <input type="submit" value="Aregar Cita" style="background-color: #72ecaf; border-color: #4dab7a; width: 100%; height: 40px; color: white;  font-weight: bold; font-size: 18px;">
        </form>
    </section>

</body>
