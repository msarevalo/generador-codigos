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
    <a href="aliados.php" class="btn w-M br-0 stl-3">Aliados</a><br><br>
    <header id="crear-header" class='head'>Generar Codigos</header>
    <form action="../back/codigos.php" enctype="multipart/form-data" method="post" id="crear" style="padding: 30px" class='tabla mb20'>
        <!--<input id="archivo" accept=".csv" name="archivo" type="file" required/><br><br><br>-->
        <label for="aliados" class="titulos">Aliado</label>
        <select id="aliados" name="aliados" required class="mdl-select__input">
            <option disabled selected value="">Seleccione Aliado</option>
            <?php
            $consulta = mysqli_query($con,"SELECT `idAliado`,`nombreAliado` FROM `aliados` WHERE `activo`=1 ORDER BY `nombreAliado` ASC;");
            while ($lconsulta = mysqli_fetch_array($consulta)){
                for ($i = 1; $i <= 1; $i++){
                    echo "<option value='" . $lconsulta['idAliado'] . "'>" . $lconsulta['nombreAliado'] . "</option>";
                }
            }
            ?>
        </select><br><br>
        <label>Cantidad</label>
        <input type="number" id="cantidad" name="cantidad" required class="mdl-select__input"><br><br>
        <input name="enviar" type="submit" value="Crear" id="btnHorario" class="btn w-M br-0 stl-3"/><br>
    </form>
    <!--<p id="prueba" style="text-transform: uppercase"></p>-->
</div>
<?php
/**
 * Created by PhpStorm.
 * User: SOPORTE COLOMBIA
 * Date: 11/12/2018
 * Time: 6:33 PM
 */

$test = "test";
//$letras = preg_split('//', $test, -1, PREG_SPLIT_NO_EMPTY);


for ($i=0;$i<2;$i++){
    //echo $test[$i];
    //echo "<br>";
}
?>

