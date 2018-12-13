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
</head>
<?php
include '../back/conexion.php';

?>
<div style="margin-left: 350px">
    <a href="codigos.php">Volver</a><br><br>
    <label for="aliados" class="titulos">Aliado</label>
    <select id="aliados" name="aliados" onchange="ajaxCodigos(this.value)">
        <option disabled selected value="">Seleccione Aliado</option>
        <?php
        $consulta = mysqli_query($con,"SELECT `idAliado`,`nombreAliado` FROM `aliados` ORDER BY `nombreAliado` ASC;");
        while ($lconsulta = mysqli_fetch_array($consulta)){
            for ($i = 1; $i <= 1; $i++){
                echo "<option value='" . $lconsulta['idAliado'] . "'>" . $lconsulta['nombreAliado'] . "</option>";
            }
        }
        ?>
    </select><br><br>
    <table id="codigos" name="aliados">
    </table>
</div>
</html>
