<?php
function getMenu()
{
    $menu = array(
        array("url" => "index.php", "name" => "Inicio"),
        array("url" => "servicios.php", "name" => "Servicios")
    );
    $menu[] = array("url" => "catalogo.php", "name" => "Catálogo");
    $menu[] = array("url" => "campanas.php", "name" => "Campañas");
    $menu[] = array("url" => "nosotros.php", "name" => "Nosotros");
    $menu[] = array("url" => "contacto.php", "name" => "Contacto");
    $menu[] = array("url" => "resenas.php", "name" => "Reseñas");
    $menu[] = array("url" => "login.php", "name" => "Ingresar");
    return $menu;
}
