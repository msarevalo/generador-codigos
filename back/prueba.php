<?php

include ('../back/conexion.php');

if(isset($_POST['get_option']))
{
    $prueba = $_POST['get_option'];

    $DesdeLetra = "a";
    $HastaLetra = "z";
    $DesdeNumero = 1;
    $HastaNumero = 9;

    //$letraAleatoria = chr(rand(ord($DesdeLetra), ord($HastaLetra)));
    for ($i=0;$i<2;$i++){
        echo $prueba[$i];
    }
    for ($i=0;$i<3;$i++) {
        echo chr(rand(ord($DesdeLetra), ord($HastaLetra)));
    }
    for ($i=0;$i<5;$i++){
        echo rand($DesdeNumero, $HastaNumero);
    }
}
?>