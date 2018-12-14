<?php

include ('conexion.php');

if(isset($_POST['get_option']))
{
    $aliado = $_POST['get_option'];
    $find=mysqli_query($con, "SELECT aliados.idAliado, aliados.nombreAliado, codigos.codigo FROM aliados INNER JOIN codigos ON aliados.idAliado= " . $aliado . " AND codigos.aliado=aliados.idAliado");
    //echo "<option selected>Seleccione Placa</option>";
    $contador = 0;

    echo "<thead class='red'><tr><td>Aliado</td><td>Codigos</td></tr></thead>";
    while($row=mysqli_fetch_array($find))
    {

        echo "<tr><td class='gray'>" . $row[1] . "</td><td class='gray'>" . $row[2] . "</td></tr>";
        $contador++;
    }
    exit;
}
?>