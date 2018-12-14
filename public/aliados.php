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

<div style="margin-left: 350px; margin-top: 50px">
    <a href="index.php"><img src="../images/return.png" style="width: 3.5%"></a>
    <a href="index.php"><img src="../images/logo_claro_club_400x200.png" style="width: 150px"></a><br>
    <a href="crear-aliado.php" class="btn w-M br-0 stl-3">Crear Aliados</a><br><br>
    <?php
    $id_eliminar = null;
    $dia_eliminar = null;
    $hora_eliminar = null;
    echo "<div id=\"listado-admin\" name=\"listado-admin\">
        <header class='head'>Aliados</header>";
    $consulta = mysqli_query($con,"SELECT `idAliado`,`nombreAliado`,`activo` FROM `aliados` ORDER BY `nombreAliado`");
    /*$lconsulta = mysqli_fetch_array($consulta);
    $long = count($lconsulta);*/
    echo "<table id='aliados' cellpadding='10' class='tabla mb20'><thead class=\"red\"><tr><th>ID</th><th>Nombre</th><th>Estado</th><th>Acciones</th></tr></thead>";
    while ($lconsulta = mysqli_fetch_array($consulta)){
        $contador = 0;
        echo "<tr class=\"bold\">";
        for ($i = 0; $i <= 1; $i++){
            $id_eliminar = $lconsulta['idAliado'];
            echo "<td style='text-transform: capitalize' class='gray'>" . $lconsulta[$i] . "</td>";
        }
        if ($lconsulta['activo']==1){
            echo "<td style='text-transform: capitalize' class='gray'>Activo</td>";
        }else{
            echo "<td style='text-transform: capitalize' class='gray'>Inactivo</td>";
        }
        echo "<td class='gray'><a href='editar-aliado.php?id={$lconsulta[$contador]}'><img src='../images/edit.png' style='width: 25%'></a></td>";
        $contador++;
    }

    echo "</tr>";
    echo "</table>
        </div>";?><br>
</div>