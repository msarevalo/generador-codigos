<?php

include ('conexion.php');

if (isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
}

if (isset($_POST['activo'])){
    $estado = $_POST['activo'];
}

$consulta = mysqli_query($con, "UPDATE `aliados` SET `nombreAliado` = '" . $nombre . "', `activo`='" . $estado . "' WHERE `aliados`.`idAliado` = ". $_SESSION['idAliado'] . ";");

if ($consulta){
    echo "<script>alert('Se editó el registro con exito'); window.location.href='../public/aliados.php'</script>";
}else{
    echo "<script>alert('Algo ha fallado'); window.location.href='../public/editar-aliado?id=" . $_SESSION['idAliado'] . "'</script>";
}