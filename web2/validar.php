<?php
	require("connect_db.php");
	$username=$_POST['usuario'];
	$pass=$_POST['pass'];

$sql2=mysqli_query($link,"SELECT * FROM login WHERE username='$username'");
if($fd=mysqli_fetch_array($sql2)){
	if($pass == $fd['passadmin']){
		echo '<script>alert("Bienvenido administrador")</script>';
		echo '<script>location.href=Menu.php</script>';
	}
	else
		echo '<script>alert("Contraseña incorrecta")</script>';
		echo '<script>location.href=login.php</script>';
}
?>