<!DOCTYPE html>
<html>
<head>
    <title>Celmedia | ClaroClub</title>
    <meta charset="UTF-8">
    <!-- Estilos -->
    <link href="../css/estilos.css" rel="stylesheet">
    <!--<link href="../css/estilos.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/script.js" type="application/javascript"></script>
</head>

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

if ($cantidad>=1) {
    $consultaAliado = mysqli_query($con, "SELECT `nombreAliado` FROM `aliados` WHERE `idAliado`=" . $id . ";");

    $lconsultaAliado = mysqli_fetch_array($consultaAliado);

    $aliadoNombre = $lconsultaAliado['nombreAliado'];
    echo "<a href=\"../public/generar-codigos.php\" style='text-decoration: none; color: #333333; cursor: pointer'><div style=\"margin-left: 350px; width: 300px\">
    <img src=\"../images/logo_claro_club_400x200.png\" style=\"width: 315px\"><br>
    <center><h3>Se crearon " . $cantidad . " codigos para el aliado "  . $aliadoNombre . " con exitos </h3><br>
    <button class='btn w-M br-0 stl-3' style='cursor: pointer'>Aceptar</button></center>
    <!--<p id=\"prueba\" style=\"text-transform: uppercase\"></p>-->
</div></a>";
    ///////////////////////////
    $consulta = mysqli_query($con, "SELECT `nombreAliado` FROM `aliados` WHERE `idAliado`=" . $id . ";");

    $lconsulta = mysqli_fetch_array($consulta);

    $aliado = $lconsulta['nombreAliado'];
//echo $cantidad . "<br><br>";

    $offset = -18000; //UTC -5 horas Bogota, Lima, Quito (3.600s * -5 horas)
    $fechaDia = "Y-m-d"; //formato fecha
    $horaActual = "H:i:s"; //formato hora
    $fdia = gmdate($fechaDia, time() + $offset); //fecha del dia actual
//$fdia=null;
    $hactual = gmdate($horaActual, time() + $offset); //hora actual

    $fecha = $fdia . " " . $hactual;

    $prueba = $lconsulta['nombreAliado'];
    $car = $prueba[0] . $prueba[1];

    $DesdeLetra = "A";
    $HastaLetra = "Z";
    $DesdeNumero = 1;
    $HastaNumero = 9;
//if ($cantidad<50) {
//$contador = 0;
    for ($j = 0; $j < $cantidad; $j++) {
        $cod = null;
        $cod = strtoupper($car);
        /*for ($i = 0; $i < 2; $i++) {
            $cod .= $prueba[$i];
        }*/
    //////////////////////////////
    for ($i = 0; $i < 2; $i++) {
            $cod .= chr(rand(ord($DesdeLetra), ord($HastaLetra)));
        }
        for ($i = 0; $i < 4; $i++) {
            $cod .= rand($DesdeNumero, $HastaNumero);
        }
        /*if ($contador == 0){
            $cod = "holor33233";
            $contador++;
        }*/
    ///////////////////////////
    $consulta2 = mysqli_query($con, "SELECT * FROM `codigos` WHERE `aliado`=" . $id . " AND `codigo` LIKE '%" . $cod . "%';");
        //echo $cod . "<br>";
        if (!$lconsulta1 = mysqli_fetch_array($consulta2)) {
            $consulta3 = mysqli_query($con, "INSERT INTO `codigos` (`codigo`, `aliado`, `fecha`) VALUES ('" . $cod . "', " . $id . ", '" . $fecha . "')");
            //echo "inserto<br>";
        } else {
            //echo "entro<br>";
            //echo $j;
            $j = $j - 1;
            //echo $j;
            //exit();
        }
    }

    $fechaDia1 = "Ymd"; //formato fecha
    $horaActual = "His"; //formato hora
    $fdia1 = gmdate($fechaDia1, time() + $offset); //fecha del dia actual
//$fdia=null;
    $hactual1 = gmdate($horaActual, time() + $offset); //hora actual

    $archivo = $fdia1 . $hactual1;
    $csv_end = "\r\n";
    $csv_sep = ";";
    $csv_file = "codigos_" . $aliado . "_" . $archivo . ".csv";
    $csv = "Barcode" . $csv_sep . $csv_end;
    $sql = "SELECT `codigo` FROM `codigos` WHERE `aliado`=" . $id . " AND `fecha` = '" . $fecha . "';";
    $res = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($res)) {
        $csv .= $row['codigo'] . $csv_sep . $csv_end;
    }
//Generamos el csv de todos los datos
    if (!$handle = fopen("../files/" . $csv_file, "w")) {
        echo "Cannot open file";
        exit;
    }
    if (fwrite($handle, utf8_decode($csv)) === FALSE) {
        echo "Cannot write to file";
        exit;
    }
    fclose($handle);
    $barchivo = mysqli_query($con, "INSERT INTO `archivos` (`nombreArchivo`, `fechaArchivo`, `aliado`) VALUES ('" . $csv_file . "', '" . $fecha . "', " . $id . ")");
    echo "<script>alert('Archivo generado!');window.location.href='descargar.php?id=" . $csv_file . "'</script>";
/*
    if (file_exists("../files/" . $csv_file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename("../files/" . $csv_file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize("../files/" . $csv_file));
        readfile("../files/" . $csv_file);
        //header("Location: ../public/generar-codigos.php");
        echo "<script>alert('prueba')</script>";
        exit;
    }*/
///////////////////////////////
}else{
    if ($cantidad==0){
        echo "<script>alert('La cantidad no puede ser cero!'); window.location.href='../public/generar-codigos.php'</script>";
    }else{
        echo "<script>alert('La cantidad no puede ser negativa!'); window.location.href='../public/generar-codigos.php'</script>";
    }
}
