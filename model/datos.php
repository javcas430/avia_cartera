<?php

include("/xampp/htdocs/cartera_facil/model/conecta.php");
$miNewCon = new data_connect();
$miNewCon->hostname = "localhost";
$miNewCon->database = "davivienda2";
$miNewCon->username = "root";
$miNewCon->password = "";
$miNewCon->getConnection();

$tablas = array("davivienda5206", "davivienda8515");
for ($i = 0; $i < sizeof($tablas); $i++) {
    $resultados = mysqli_query($miNewCon->conexion, "SELECT * FROM $tablas[$i]");
    while ($consulta = mysqli_fetch_array($resultados)) {

        $row = [];
        $row[] = $consulta['analista'];
        $row[] = $consulta['banco'];
        $row[] = $consulta['cuenta'];
        $row[] = $consulta['fecha'];
        $row[] = $consulta['doc'];
        $row[] = $consulta['tp'];
        $row[] = $consulta['referencia1'];
        $row[] = $consulta['valor_cheque'];
        $row[] = $consulta['ofi'];
        $row[] = $consulta['valor_total'];
        if ($consulta['valor_total']) {
            $cast = $consulta['valor_total'];
            $cast = str_replace(".", "", $cast);
            $cast = str_replace(",", ".", $cast);
            $cast = (float)$cast;
        }
        $row[] = $consulta['ciudad'];
        $row[] = $consulta['id'];

        if ($cast < 50000000) {
            $row[] = "BAJO";
        } elseif ($cast >= 50000000 && $cast <= 150000000) {
            $row[] = "MEDIO";
        } elseif ($cast > 150000000) {
            $row[] = "ALTO";
        }
        $arr[] = $row;
    }
}
echo json_encode(
    array(
        "data" => $arr
    )
);
