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
    <a href="codigos.php">Volver</a><br><br>
    <?php
    $id_eliminar = null;
    $dia_eliminar = null;
    $hora_eliminar = null;
    echo "<div id=\"listado-admin\" name=\"listado-admin\">
        <header>Historial Codigos</header>";
    $consulta = mysqli_query($con,"SELECT `idArchivo`,`nombreArchivo`,`fechaArchivo` FROM `archivos`");
    /*$lconsulta = mysqli_fetch_array($consulta);
    $long = count($lconsulta);*/
    echo "<table id='historial'><thead><tr><th>ID</th><th>Nombre</th><th>Fecha</th></tr></thead>";
    while ($lconsulta = mysqli_fetch_array($consulta)){
        $contador = 0;
        echo "<tr>";
        for ($i = 0; $i <= 2; $i++){
            $id_eliminar = $lconsulta['idArchivo'];
            echo "<td style='text-transform: capitalize; padding-left: 10px; padding-right: 10px'>" . $lconsulta[$i] . "</td>";
        }
        echo "<td><a href='../back/descargar.php?id={$lconsulta['nombreArchivo']}'><img src='../images/download.png' style='width: 4%'></a></td>";
        $contador++;
    }

    echo "</tr>";
    echo "</table>
        </div>";?><br>
</div>