<?php 
function getMenuAdmin(){
    $menu = array(array("url" => "indexAdmin.php", "name" => "Inicio"), 
                array("url" => "serviciosAdmin.php", "name" => "Servicios"));
    $menu[] = array("url" => "#", "name" => "Tienda");
    $menu[] = array("url" => "#", "name" => "Crear_Usuario_Admin");
    return $menu;
}