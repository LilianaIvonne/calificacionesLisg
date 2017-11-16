<?php

    //Llamada al modelo
    require_once("../modelo/profesor_modelo.php");
    $profesor=new profesor_modelo();
    $datos=$profesor->get_profesores();

    //Llamada a la vista
    require_once("../vista/profesor_vista.php");


?>