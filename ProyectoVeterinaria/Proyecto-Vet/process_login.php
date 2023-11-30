<?php
    include("config.php");
    $conn = new mysqli($servername, $username, $password, $database);   
        if($conn->connect_error){
            die("Error de conexion ".$conn->connect_error);
        }



    $user_post = $_POST["username"]; //con username se refiere al name="username" de login.php
    $password_post = $_POST["password"];

    echo $user_post;

    $sql = "SELECT password FROM usuarios WHERE user = '$user_post'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if($row){
        if($password_post==$row["password"]){ //password_verify($password_post,$row["password"]) eso va dentro del if si la contra está encriptada
            session_start();
            $_SESSION["username"]=$user_post;
            header("Location: index.php");
        } 
    } else{
        echo "Usuario y clave incorrecto";
    }