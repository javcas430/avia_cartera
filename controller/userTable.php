<?php
include("../model/conecta.php");
include "../services/TableReader.php";
$id = "20";
$miServicio2 = new ServicioTablaInfo($conexion);
$myServiceFunction2 = $miServicio2->GetDatoDoc($id);
// Printing the table
echo json_encode(
    array(
        "data" => $myServiceFunction2
    )
);
