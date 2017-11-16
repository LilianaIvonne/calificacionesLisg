<?php

    //Llamada al modelo
    require_once("../modelo/materia_modelo.php");
    $materia=new materia_modelo();
    $datos=$materia->get_materia();

    //Llamada a la vista
    require_once("../vista/materia_vista.php");


?>