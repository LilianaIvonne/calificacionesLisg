<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('America/Mexico_City');
define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
/** Include PHPExcel */


$con=mysqli_connect("localhost","escuela","escuela","escuela");

      if(!$con) {
            echo "Error:No se pudo conectar a MySQL".PHP_EOL."<br>";
            echo "Error de depuración".mysqli_connect().PHP_EOL."<br>";
            #echo "Error de depuración".mysqli_connect().PHP_EOL"<br>";
            exit;
      }

$consulta="SELECT nombre FROM alumno";

//if($con->num_rows > 0 ){

require_once dirname(__FILE__) . '/excel/PHPExcel.php';
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();


// Set document properties
echo date('H:i:s') , " Set document properties" , EOL;
$objPHPExcel->getProperties()->setCreator("Alejandro López")
                                           ->setLastModifiedBy("Maarten Balliauw")
                                           ->setTitle("PHPExcel Test Document")
                                           ->setSubject("PHPExcel Test Document")
                                           ->setDescription("Test document for PHPExcel, generated using PHP classes.")
                                           ->setKeywords("office PHPExcel php")
                                           ->setCategory("Test result file");


$i = 1; //Numero de fila donde se va a comenzar a rellenar
 while ($fila = $con->mysql_fetch_array($resultado, MYSQL_NUM)) {
     $objPHPExcel->setActiveSheetIndex(0)
         ->setCellValue('A'.$i, $fila['alumno']);
     //$i++;
 }

 // Se asigna el nombre a la hoja
$objPHPExcel->getActiveSheet()->setTitle('Alumnos');
 
// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
$objPHPExcel->setActiveSheetIndex(0);
 
// Inmovilizar paneles
//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);



$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('base_excel.xlsx');
exit;
/*}
else{
      print_r('No hay resultados para mostrar');
}*/

?>