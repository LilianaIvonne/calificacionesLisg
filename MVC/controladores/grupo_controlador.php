<?php

    //Llamada al modelo
    require_once("../modelo/grupo_modelo.php");
    $grupo=new grupo_modelo();
    $datos=$grupo->get_grupo();

    //Llamada a la vista
    require_once("../vista/grupo_vista.php");


?>