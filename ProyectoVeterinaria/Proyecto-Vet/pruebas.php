<?php 
    include("menu.php");
    include("config.php");
    $menu = getMenu();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
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


    <!--Prueba de Conexion -->
    <?php 
    /*
        $conn = new mysqli($servername, $username, $password, $database);
        
        if($conn->connect_error){
            die("Error de conexion ".$conn->connect_error);
        }
    */
    ?>
    
    <!--Prueba de Insersión-->

    <?php
        /*
        $sql = "INSERT INTO usuarios (name, email, user, password, rol)
        VALUES ('Juan', 'juan@ejemplo.com', 'juan1', '123', 'usuario')";

        if($conn->query($sql)==TRUE){
            echo "Insertó Correctamente";
        } else {
            echo "Error de insertar registro".$conn->connect_error;
        }
        */
    ?>

    <!--Prueba de Selección-->
    <?php
        /*
        $sql = "SELECT user, password, rol FROM usuarios";
        $resultado = $conn->query($sql);

        if($resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()){
                echo "USER: ".$row["user"]." PASSWORD:".$row["password"]." ROL:".$row["rol"]."<br>";
            }
        }else{
            echo "No se encontraron usuarios";
        }
        */
    ?>

    <!--Prueba de Actualización-->
    <?php
        /*
        $sql = "UPDATE usuarios set name='Aaron' where id_user=2";
        if($conn->query($sql)==TRUE){
            echo "Se actualizo el registro.<br>";
        } else {
            echo "No se actualizo.";
        }
        */
    ?>

    <!--Prueba de Eliminación-->
    <?php
        /*
        $sql = "DELETE FROM usuarios where id_user='3'";
        
        if($conn->query($sql)==TRUE){
            echo "Se elimino el registro.<br>";
        } else {
            echo "No se elimino.";
        }
        */
    ?>

    

</body>