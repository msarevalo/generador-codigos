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

if (isset($_GET['id'])){
    $idAliado = $_GET['id'];
    $_SESSION['idAliado'] = $_GET['id'];
}

$consulta = mysqli_query($con,"SELECT * FROM `aliados` WHERE `idAliado`='" . $idAliado . "';");
$personaje = mysqli_fetch_array($consulta);

?>

<div style="margin-left: 350px">
    <a href="aliados.php">Voler</a><br><br>
    <header id="crear-header">Editar Aliado</header>
    <form action="../back/editarAliado.php" enctype="multipart/form-data" method="post" id="crear" style="padding: 30px">
        <!--<input id="archivo" accept=".csv" name="archivo" type="file" required/><br><br><br>-->
        <label for="nombre" class="titulos">Nombre</label>
        <?php
        echo "<input type=\"text\" id=\"nombre\" name=\"nombre\" value='" . $personaje['nombreAliado'] . "' required><br><br>";
        ?>
        <label for="activo" class="titulos">Activo</label>
        <select id="activo" name="activo" required>
            <?php
            if ($personaje['activo']==='1'){
                echo "<option value='1' selected>Activo</option>
                    <option value='0'>Inactivo</option>";
            }else{
                echo "<option value='1'>Activo</option>
                    <option value='0' selected>Inactivo</option>";
            }
            ?>
        </select><br><br>
        <input name="enviar" type="submit" value="Editar" id="btnHorario"/><br>
    </form>
</div>


