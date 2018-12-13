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
    <a href="index.php">Volver</a>
    <a href="crear-aliado.php">Crear Aliados</a><br><br>
    <?php
    $id_eliminar = null;
    $dia_eliminar = null;
    $hora_eliminar = null;
    echo "<div id=\"listado-admin\" name=\"listado-admin\">
        <header>Aliados</header>";
    $consulta = mysqli_query($con,"SELECT `idAliado`,`nombreAliado`,`activo` FROM `aliados` ORDER BY `nombreAliado`");
    /*$lconsulta = mysqli_fetch_array($consulta);
    $long = count($lconsulta);*/
    echo "<table id='aliados' cellpadding='10'><thead><tr><th>ID</th><th>Nombre</th><th>Estado</th></tr></thead>";
    while ($lconsulta = mysqli_fetch_array($consulta)){
        $contador = 0;
        echo "<tr>";
        for ($i = 0; $i <= 1; $i++){
            $id_eliminar = $lconsulta['idAliado'];
            echo "<td style='text-transform: capitalize'>" . $lconsulta[$i] . "</td>";
        }
        if ($lconsulta['activo']==1){
            echo "<td style='text-transform: capitalize'>Activo</td>";
        }else{
            echo "<td style='text-transform: capitalize'>Inactivo</td>";
        }
        echo "<td><a href='editar-aliado.php?id={$lconsulta[$contador]}'><img src='../images/edit.png' style='width: 5%'></a></td>";
        $contador++;
    }

    echo "</tr>";
    echo "</table>
        </div>";?><br>
</div>