<?php

include("/xampp/htdocs/cartera_facil/model/conecta.php");
include "../services/TableReader.php";

// $doc = "3686";
// $ofi = "4513";

$miServicio = new ServicioTablaInfo($conexion);
$myServiceFunction = $miServicio->GetInfoTabla();
// print_r($myServiceFunction);

echo json_encode(
    array(
        "data" => $myServiceFunction
    )
);


// $myServiceFunction = $miServicio -> GetDatoDoc($doc);
// $myServiceFunction = $miServicio -> GetDatoOfi($ofi

// while ($myServiceFunction) {
//     $row = array();
//     $miServicio = new ServicioTablaInfo($conexion);
//     $row['analista'] =     $_POST['analista'];
    // $row[] = $consulta['banco'];
    // $row[] = $consulta['cuenta'];
    // $row[] = $consulta['fecha'];
    // $row[] = $consulta['doc'];
    // $row[] = $consulta['tp'];
    // $row[] = $consulta['referencia1'];
    // $row[] = $consulta['valor_cheque'];
    // $row[] = $consulta['ofi'];
    // $row[] = $consulta['valor_total'];
    // if ($consulta['valor_total']) {
    //     $cast = $consulta['valor_total'];
    //     $cast = str_replace(".", "", $cast);
    //     $cast = str_replace(",", ".", $cast);
    //     $cast = (float)$cast;
    // }
    // $row[] = $consulta['ciudad'];
    // $row[] = $consulta['id'];

    // if ($cast < 50000000) {
    //     $row[] = "BAJO";
    // } elseif ($cast >= 50000000 && $cast <= 150000000) {
    //     $row[] = "MEDIO";
    // } elseif ($cast > 150000000) {
    //     $row[] = "ALTO";
    // }
    // $arr[] = $row;
// }

// echo json_encode(
//     array(
//         "data" => $arr
//     )
// );
    



// if (isset($_POST['banco'])) {
//     $row = [];
// );

//     // print_r($myServiceFunction);

//     $row['analista']             = $_POST['anailsta'];
//     $row['analista']             = $_POST['anailsta'];
//     $row['analista']             = $_POST['anailsta'];
//     $row['banco']                = $_POST['banco'];
//     $row['cuenta']               = $_POST['cuenta'];
//     $row['fecha']                = $_POST['fecha'];
//     $row['doc']                  = $_POST['doc'];
//     $row['tp']                   = $_POST['tp'];
//     $row['referencia1']          = $_POST['referencia1'];
//     $row['valor_cheque']         = $_POST['valor_cheque'];
//     $row['ofi']                  = $_POST['ofi'];
//     $row['valor_total']          = $_POST['valor_total'];


//     if ($row['valor_total']) {
//         $cast = $row['valor_total'];
//         $cast = str_replace(".", "", $cast);
//         $cast = str_replace(",", ".", $cast);
//         $cast = (float)$cast;
//     }
//     $row['ciudad']               = $_POST['ciudad'];
//     $row['id']                   = $_POST['id'];

//     if ($cast < 50000000) {
//         $row[] = "BAJO";
//     } elseif ($cast >= 50000000 && $cast <= 150000000) {
//         $row[] = "MEDIO";
//     } elseif ($cast > 150000000) {
//         $row[] = "ALTO";
//     }
//     $arr[] = $row;
// }
// echo json_encode(
//     array(
//         "data" => $arr
//     )
// );





// if (isset($_POST['banco'])) {

//     $data = array();
//     $companyWriter = new CompanyWriter($coneccion, $email_user);

//     $data['id']             = $_POST['ID_USER'];
//     $data['name']           = $_POST['name'];
//     $data['comercial_name'] = $_POST['commercialname'];
//     $data['number_fiscal']  = $_POST['identification'];
//     $data['id_estado']      = $_POST['id_estado'];
//     $data['mail']           = $_POST['email'];
//     $result = $companyWriter->UpdateCompany($data);

//     if ($result) {
//         return header("HTTP/1.0 201 Success");
//     } else {
//         return header("HTTP/1.0 500 Internal Server");
//     }
// }
