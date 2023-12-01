<?php
    include("config.php");
    $conn = new mysqli($servername, $username, $password, $database);   
        if($conn->connect_error){
            die("Error de conexion ".$conn->connect_error);
        }

    $name_post = $_POST["name"];
    $email_post = $_POST["email"];
    $user_post = $_POST["username"]; //con username se refiere al name="username" de registro.php
    $password_post = $_POST["password"];
    $password_hash = password_hash($password_post, PASSWORD_BCRYPT);

    //Insersion

    $sql = "INSERT INTO usuarios (name, email, user, password, rol)
    VALUES ('$name_post', '$email_post', '$user_post', '$password_post', 'admin')";

    if($conn->query($sql)==TRUE){
        header("Location: indexAdmin.php");
        echo "Insertó Correctamente";
    } else {
        echo "Error de insertar registro".$conn->connect_error;
    }