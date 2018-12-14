<?php

include ('conexion.php');

if(isset($_POST['get_option']))
{
    $aliado = $_POST['get_option'];
    $find=mysqli_query($con, "SELECT aliados.idAliado, aliados.nombreAliado, archivos.nombreArchivo, archivos.fechaArchivo FROM aliados INNER JOIN archivos ON aliados.idAliado= " . $aliado . " AND archivos.aliado=aliados.idAliado");
    //echo "<option selected>Seleccione Placa</option>";
    $contador = 0;

    echo "<thead class='red'><tr><td>Aliado</td><td>Archivo</td><td>Fecha</td><td>Descargar</td></tr></thead>";
    while($row=mysqli_fetch_array($find))
    {
        echo "<tr><td class='gray'>" . $row[1] . "</td><td class='gray'>" . $row[2] . "</td><td class='gray'>" . $row[3] . "</td>";
        echo "<td class='gray'><a href='../back/descargar.php?id={$row[2]}'><img src='../images/download.png' style='width: 25%'></a></td></tr>";
        $contador++;
    }
    exit;
}
?>