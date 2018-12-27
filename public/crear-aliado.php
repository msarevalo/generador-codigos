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
    <a href="aliados.php"><img src="../images/return.png" style="width: 3.5%"></a>
    <a href="index.php"><img src="../images/logo_claro_club_400x200.png" style="width: 150px"></a>
    <header id="crear-header" class="head">Crear Aliado</header>
    <form action="../back/crearAliado.php" enctype="multipart/form-data" method="post" id="crear" style="padding: 30px" class='tabla mb20'>
        <!--<input id="archivo" accept=".csv" name="archivo" type="file" required/><br><br><br>-->
        <label for="aliado" class="titulos">Nombre Aliado</label>
        <input type="text" placeholder="Nombre" id="aliado" name="aliado" required class="mdl-select__input"><br><br>
        <input name="enviar" type="submit" value="Crear" id="btnHorario" class="btn w-M br-0 stl-3"/><br>
    </form>
</div>