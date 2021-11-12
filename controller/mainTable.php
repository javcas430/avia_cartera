<?php
include("../model/conecta.php");
include "../services/TableReader.php";

$miServicio = new ServicioTablaInfo($conexion);
$myServiceFunction = $miServicio->GetInfoTabla();
$largo = sizeof($myServiceFunction);

//Adding category colum to the table

for ($i = 0; $i < $largo; $i++) {

    $cast = $myServiceFunction[$i][9];
    $cast = str_replace(".", "", $cast);
    $cast = str_replace(",", ".", $cast);
    $cast = (float)$cast;
    $myServiceFunction[$i][6] = "<td><a href='../views/usuario.php'FONT COLOR=#377DFF><u>" . $myServiceFunction[$i][6] . "</u></FONT></a></td></tr>";

    if ($cast < 80000000) {
        $myServiceFunction[$i][9] = "<td><FONT COLOR=#00C9A7>" . $myServiceFunction[$i][9] . "</FONT></td></tr>";
        array_push($myServiceFunction[$i], "<td><span class='legend-indicator bg-success'></span>BAJO</td></tr>");
    } elseif ($cast >= 80000000 && $cast <= 200000000) {
        $myServiceFunction[$i][9] = "<td><FONT COLOR=#EC9A3C>" . $myServiceFunction[$i][9] . "</FONT></td></tr>";
        array_push($myServiceFunction[$i], "<td><span class='legend-indicator bg-warning'></span>MEDIO</td></tr>");
    } elseif ($cast > 200000000) {
        $cliente = $myServiceFunction[$i][9];
        $myServiceFunction[$i][9] = "<td><FONT COLOR=#ED4C78>" . $myServiceFunction[$i][9] . "</FONT></td></tr>";
        array_push($myServiceFunction[$i], "<td><span class='legend-indicator bg-danger'></span>ALTO</td></tr>");
    }
}

// Printing the table
echo json_encode(
    array(
        "data" => $myServiceFunction
    )
);
