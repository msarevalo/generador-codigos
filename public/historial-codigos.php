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
include '../back/conexion.php';

?>
<div style="margin-left: 350px">
    <a href="codigos.php"><img src="../images/return.png" style="width: 3.5%"></a>
    <a href="index.php"><img src="../images/logo_claro_club_400x200.png" style="width: 150px"></a><br>
    <?php
    $id_eliminar = null;
    $dia_eliminar = null;
    $hora_eliminar = null;
    echo "<div id=\"listado-admin\" name=\"listado-admin\">
        <header class='head'>Historial Codigos</header>";
    $consulta = mysqli_query($con,"SELECT `idArchivo`,`nombreArchivo`,`fechaArchivo` FROM `archivos`");
    /*$lconsulta = mysqli_fetch_array($consulta);
    $long = count($lconsulta);*/
    echo "<table id='historial' class='tabla mb20'><thead class=\"red\"><tr><th>ID</th><th>Nombre</th><th>Fecha</th><th>Descargar</th></tr></thead>";
    while ($lconsulta = mysqli_fetch_array($consulta)){
        $contador = 0;
        echo "<tr>";
        for ($i = 0; $i <= 2; $i++){
            $id_eliminar = $lconsulta['idArchivo'];
            echo "<td style='text-transform: capitalize; padding-left: 10px; padding-right: 10px' class='gray'>" . $lconsulta[$i] . "</td>";
        }
        echo "<td class='gray'><a href='../back/descargar.php?id={$lconsulta['nombreArchivo']}'><img src='../images/download.png' style='width: 30%'></a></td>";
        $contador++;
    }

    echo "</tr>";
    echo "</table>
        </div>";?><br>
</div>