<?php
/**
 * Created by PhpStorm.
 * User: SOPORTE COLOMBIA
 * Date: 11/12/2018
 * Time: 7:34 PM
 */

include('../back/conexion.php');
ini_set('max_execution_time', 300);


if (isset($_POST['aliados'])){
    $id = $_POST['aliados'];
}

if (isset($_POST['cantidad'])){
    $cantidad = $_POST['cantidad'];
}

$consulta = mysqli_query($con,"SELECT `nombreAliado` FROM `aliados` WHERE `idAliado`=". $id . ";");

$lconsulta = mysqli_fetch_array($consulta);

$aliado =  $lconsulta['nombreAliado'];
//echo $cantidad . "<br><br>";

$offset=-18000; //UTC -5 horas Bogota, Lima, Quito (3.600s * -5 horas)
$fechaDia="Y-m-d"; //formato fecha
$horaActual="H:i:s"; //formato hora
$fdia=gmdate($fechaDia, time()+$offset); //fecha del dia actual
//$fdia=null;
$hactual=gmdate($horaActual, time()+$offset); //hora actual

$fecha = $fdia . " " . $hactual;

$prueba = $lconsulta['nombreAliado'];
$car = $prueba[0] . $prueba[1];

$DesdeLetra = "a";
$HastaLetra = "z";
$DesdeNumero = 1;
$HastaNumero = 9;
//if ($cantidad<50) {
//$contador = 0;
    for ($j=0;$j<$cantidad;$j++) {
        $cod = null;
        $cod = $car;
        /*for ($i = 0; $i < 2; $i++) {
            $cod .= $prueba[$i];
        }*/
        for ($i = 0; $i < 3; $i++) {
            $cod .= chr(rand(ord($DesdeLetra), ord($HastaLetra)));
        }
        for ($i = 0; $i < 5; $i++) {
            $cod .= rand($DesdeNumero, $HastaNumero);
        }
        /*if ($contador == 0){
            $cod = "holor33233";
            $contador++;
        }*/
        $consulta2 = mysqli_query($con,"SELECT * FROM `codigos` WHERE `aliado`=". $id . " AND `codigo` LIKE '%" . $cod . "%';");
        //echo $cod . "<br>";
        if (!$lconsulta1 = mysqli_fetch_array($consulta2)){
            $consulta3 = mysqli_query($con, "INSERT INTO `codigos` (`codigo`, `aliado`, `fecha`) VALUES ('" . $cod . "', " . $id . ", '" . $fecha ."')");
            //echo "inserto<br>";
        }else{
            //echo "entro<br>";
            //echo $j;
            $j = $j-1;
            //echo $j;
            //exit();
        }
    }

$fechaDia1="Ymd"; //formato fecha
$horaActual="His"; //formato hora
$fdia1=gmdate($fechaDia1, time()+$offset); //fecha del dia actual
//$fdia=null;
$hactual1=gmdate($horaActual, time()+$offset); //hora actual

$archivo = $fdia1 . $hactual1;
$csv_end = "\n";
$csv_sep = ";";
$csv_file = "codigos_" . $aliado . "_" . $archivo . ".csv";
$csv="Barcode" . $csv_sep . $csv_end;
$sql="SELECT `codigo` FROM `codigos` WHERE `aliado`=". $id . " AND `fecha` = '" . $fecha . "';";
$res=mysqli_query($con, $sql);
while($row=mysqli_fetch_array($res))
{
    $csv.=$row['codigo']. $csv_sep . $csv_end;
}
//Generamos el csv de todos los datos
if (!$handle = fopen("../files/".$csv_file, "w")) {
    echo "Cannot open file";
    exit;
}
if (fwrite($handle, utf8_decode($csv)) === FALSE) {
    echo "Cannot write to file";
    exit;
}
fclose($handle);

if (file_exists("../files/".$csv_file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename("../files/".$csv_file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize("../files/".$csv_file));
    readfile("../files/".$csv_file);
    //header("Location: generar-codigos.php");
    exit;
}
