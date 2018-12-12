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
    <a href="index.php" style="text-decoration: none">Volver</a><br>
    <header id="crear-header">Crear Aliado</header>
    <form action="../back/crearAliado.php" enctype="multipart/form-data" method="post" id="crear" style="padding: 30px">
        <!--<input id="archivo" accept=".csv" name="archivo" type="file" required/><br><br><br>-->
        <label for="aliado" class="titulos">Nombre Aliado</label>
        <input type="text" placeholder="Nombre" id="aliado" name="aliado" required><br><br>
        <input name="enviar" type="submit" value="Crear" id="btnHorario"/><br>
    </form>
</div>