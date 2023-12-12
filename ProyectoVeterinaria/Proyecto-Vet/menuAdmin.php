<?php 
function getMenuAdmin(){
    $menu = array(array("url" => "indexAdmin.php", "name" => "Inicio"), 
                array("url" => "serviciosAdmin.php", "name" => "Servicios"));
    $menu[] = array("url" => "catalogoAdmin.php", "name" => "Catálogo");
    $menu[] = array("url" => "medicosAdmin.php", "name" => "Médicos");
    $menu[] = array("url" => "campanasAdmin.php", "name" => "Campañas");
    $menu[] = array("url" => "citasAdmin.php", "name" => "Citas");
    $menu[] = array("url" => "registroAdmin.php", "name" => "Registrar_Admin");
    return $menu;
}
