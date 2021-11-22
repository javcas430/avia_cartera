<?php
include("../model/conecta.php");
include "../services/TableReader.php";

$miServicio = new ServicioTablaInfo($conexion);
$myServiceFunction = $miServicio->GetInfoTabla();
$largo = sizeof($myServiceFunction);

//Adding category colum to the table

for ($i = 0; $i < $largo; $i++) {

    $cast = $myServiceFunction[$i][7];
    $myServiceFunction[$i][1] = "<td><a href='../views/usuario.php'FONT COLOR=#377DFF><u>" . $myServiceFunction[$i][1] . "</u></FONT></a></td></tr>";

    if ($cast < 300000) {
        $myServiceFunction[$i][7] = "<td><FONT COLOR=#00C9A7 font-weight:bold>" . $myServiceFunction[$i][7] . "</FONT></td></tr>";
        array_push($myServiceFunction[$i], "<td><span class='legend-indicator bg-success'></span>BAJO</td></tr>");
    } elseif ($cast >= 300000 && $cast <= 600000) {
        $myServiceFunction[$i][7] = "<td><FONT COLOR=#EC9A3C font-weight:bold>" . $myServiceFunction[$i][7] . "</FONT></td></tr>";
        array_push($myServiceFunction[$i], "<td><span class='legend-indicator bg-warning'></span>MEDIO</td></tr>");
    } elseif ($cast > 600000) {
        $cliente = $myServiceFunction[$i][7];
        $myServiceFunction[$i][7] = "<td><FONT COLOR=#ED4C78 font-weight:bold>" . $myServiceFunction[$i][7] . "</FONT></td></tr>";
        array_push($myServiceFunction[$i], "<td><span class='legend-indicator bg-danger'></span>ALTO</td></tr>");
    }
}

// Printing the table
echo json_encode(
    array(
        "data" => $myServiceFunction
    )
);
