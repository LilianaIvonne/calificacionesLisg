<?php

    //Llamada al modelo
    require_once("../modelo/coordinadores_modelo.php");
    $coordinadores=new coordinadores_modelo();
    $datos=$coordinadores->get_coordinadores();

    //Llamada a la vista
    require_once("../vista/coordinadores_vista.php");


?>