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
    <a href="codigos.php" style="text-decoration: none">Volver</a><br>
    <header id="crear-header">Crear Codigos</header>
    <form action="../back/codigos.php" enctype="multipart/form-data" method="post" id="crear" style="padding: 30px">
        <!--<input id="archivo" accept=".csv" name="archivo" type="file" required/><br><br><br>-->
        <label for="aliados" class="titulos">Aliado</label>
        <select id="aliados" name="aliados" required>
            <option disabled selected value="">Seleccione Aliado</option>
            <?php
            $consulta = mysqli_query($con,"SELECT `idAliado`,`nombreAliado` FROM `aliados` WHERE `activo`=1 ORDER BY `nombreAliado` ASC;");
            while ($lconsulta = mysqli_fetch_array($consulta)){
                for ($i = 1; $i <= 1; $i++){
                    echo "<option value='" . $lconsulta['idAliado'] . "'>" . $lconsulta['nombreAliado'] . "</option>";
                }
            }
            ?>
        </select>
        <label>Cantidad</label>
        <input type="number" id="cantidad" name="cantidad" required><br><br>
        <input name="enviar" type="submit" value="Crear" id="btnHorario"/><br>
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

