<?php


include ('conexion.php');

if (isset($_POST['aliado'])){
    $nombre = $_POST['aliado'];
}

$consulta = mysqli_query($con, "INSERT INTO `aliados` (`nombreAliado`, `activo`) VALUES ('" . $nombre . "', 1)");

if ($consulta){
    echo "<script>alert('Se realizó el registro con exito'); window.location.href='../public/crear-aliado.php'</script>";
}else{
    echo "<script>alert('Algo ha fallado'); window.location.href='../public/crear-aliado.php'</script>";
}