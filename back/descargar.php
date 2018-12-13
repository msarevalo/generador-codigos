<?php

include ('conexion.php');

$csv_file = null;
if (isset($_GET['id'])){
    $csv_file = $_GET['id'];
}
//echo $csv_file;
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
}else{
    $consulta = mysqli_query($con,"DELETE FROM `archivos` WHERE `archivos`.`nombreArchivo` LIKE '%" . $csv_file . "%';");
    echo "<script>alert('El archivo no se encontro en los registros'); window.location.href='../public/historial-codigos.php'</script>";
}