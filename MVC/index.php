<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema Integral</title>
</head>
<body background="imagenes/fondo.png">
Bienvenido
<?php
    #require_once("controladores/alumnos_controlador.php");
    require_once("controladores/director_controlador.php");
	#require_once("vista/login.php");

?>
<a href='controladores/tipos_usuarios_controlador.php' >Tipos de usuarios</a>
<a href='controladores/alumnos_controlador.php' >Alumnos</a>
<a href='controladores/profesores_controlador.php' >Profesores</a>
<a href='controladores/coordinadores_controlador.php' >Coordinadores</a>
<a href='controladores/materia_controlador.php' >Materias</a>
<a href='controladores/grupo_controlador.php' >Grupos</a>



</body>
</html>