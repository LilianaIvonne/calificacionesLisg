<?php
//require('charts.php');
include 'charts.php';
//connect to the database 
mysql_connect ( "localhost", "root", "" );
mysql_select_db ( "escuela" );

//start the XML output 

//echo InsertChart ( "charts.swf", "charts_library", "ejemplograficas.php", 400, 250 );

//print "<chart>";
//$chart [ 'chart_data' ][ 0 ][ 0 ] = "";
//$chart [ 'chart_data' ][ 1 ][ 0 ] = "Alumno";
//$chart [ 'chart_data' ][ 2 ][ 0 ] = "Materia";
//print "<chart_data>";

//output the first row that contains the years 
//print "<row>";
//print "<null/>";






$usuario = mysql_query ("SELECT nombre FROM alumno ");
for ( $row=0; $row < mysql_num_rows($usuario); $row++ ) {
	print "<string>".mysql_result ( $usuario, $row, "nombre")."</string>";


$grupo = mysql_query ("SELECT `califcaciones`.`calificaicon`, `materia`.`nombre_materia`, `materia`.`id_materia` FROM `materia` LEFT JOIN `materia-calif` ON `materia-calif`.`id_materia` = `materia`.`id_materia` LEFT JOIN `califcaciones` ON `materia-calif`.`id_calif` = `califcaciones`.`id_calif` ");      

for ( $column=0; $column < mysql_num_rows($grupo); $column++ ) {
	print "<row>"; 
	$region = mysql_result ( $grupo, $column, "calificaicon");
	print "<string>$region</string>";
	 
	$data = mysql_query ("SELECT nombre, nombre_materia FROM alumno, materia WHERE alumno.id_alumno=materia.id_alumno ");      
	//for ( $column=0; $column < mysql_num_rows($data); $column++ ) {
	//	print "<number>".mysql_result ( $data, $column, "nombre_materia")."</number>";
	//}
	print "</row>";
	echo"<br>";
}
}
print "<row>";


//output row 2 to 4. Each row contains a region name and its data 


//finish the XML output 
print "</chart_data>";
print "</chart>";

?>
