<?php

 //Llamada al modelo
    require_once("./modelo/director_modelo.php");
    $director=new director_modelo();
    $datos=$director->get_director();

    //Llamada a la vista
    require_once("./vista/director_vista.php");

?>