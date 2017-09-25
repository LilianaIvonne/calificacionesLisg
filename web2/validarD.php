<?php
	require("connectD_db.php");
	$id=$_POST['idd'];
	$mat=$_POST['mat'];
	$pass=$_POST['pass'];
	$nom=$_POST['nom'];
	$app=$_POST['app'];
	$apm=$_POST['apm'];
	$idu=$_POST['idu'];

	$query="INSERT INTO docente (id_docente, matricula,contraseña,nombre,ap_materno,ap_paterno,id_tipo) VALUES ('$idd','$mat','$pass','$nom','$app','$apm','$idu')";
	mysqli_query($query);
	echo "<script>location.href='docentes.php'</script>";

	
	
?>