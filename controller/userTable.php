<?php
include("../model/conecta.php");
include "../services/TableReader.php";

$avia_contactos = new ServicioTablaInfo($conexion);
$contact_info = $avia_contactos->GetContactInfo();
// Printing the table
$vec = sizeof($contact_info);
$dato_final[] = array();
$j = 0;

// for ($i = 0; $i < $vec; $i++) {
//     if ($contact_info[$i][0] > 0 && $contact_info[$i][0] > 0) {
//         $dato_final[$j] = $contact_info[$i];
//         $j++;
//     }
// }

echo json_encode(
    array(
        "data" => $contact_info
    )
);
