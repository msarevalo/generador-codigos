<?php

session_start();

$con = mysqli_connect("localhost", "celmedia", "ninguna123.", "claroclub");
//$con = mysqli_connect("localhost", "root", "celmedia_2017", "claroclub");

if (!$con){
    echo "<script>alert('Algo ha ocurrido')</script>";
    //echo "fallo";
}else{
    //echo "ok";
}

/*$resultado = mysqli_query($con, "SELECT * FROM `user`");
print_r($resultado);
/*if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo']=time();
}
else if (time() - $_SESSION['tiempo'] > 10) {
    session_destroy();
    //header("Location: ../views/index.php");
    die();
}
$_SESSION['tiempo']=time();
*/
?>
