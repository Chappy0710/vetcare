<?php 
function getMenu(){
    $menu = array(array("url" => "index.php", "name" => "Inicio"), 
                array("url" => "servicios.php", "name" => "Servicios"));
    $menu[] = array("url" => "#", "name" => "Tienda");
    $menu[] = array("url" => "#", "name" => "Nosotros");
    $menu[] = array("url" => "#", "name" => "Contacto");
    $menu[] = array("url" => "login.php", "name" => "Ingresar");
    return $menu;
}