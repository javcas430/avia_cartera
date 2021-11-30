<?php

class ServicioTablaInfo
{
    private $conexion;

    function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function GetInfoTabla()
    {
        $query = "SELECT * FROM cartera";
        $consulta = mysqli_query($this->conexion, $query);
        if ($consulta) {
            $resultados = mysqli_fetch_all($consulta);
            // $resultados = array("response" => true, "body" => $resultados);
        } else {
            $resultados = array("response" => false, "body" => [""]);
        }
        return $resultados;
    }

    public function GetDatoDoc($id)
    {
        $query = "SELECT * FROM davivienda8515 WHERE doc = $id";
        $consulta = mysqli_query($this->conexion, $query);
        if ($consulta) {
            $resultados = mysqli_fetch_all($consulta);
            // $resultados = array("response" => true, "body" => $resultados);
        } else {
            $resultados = array("response" => false, "body" => [""]);
        }
        return $resultados;
    }

    public function GetDatoOfi($id)
    {
        $query = "SELECT * FROM davivienda8515 WHERE ofi = $id";
        $resultados = mysqli_query($this->conexion, $query);
        if ($resultados) {
            $datosTabla = mysqli_fetch_assoc($resultados);
            $response = array("response" => true, "body" => $datosTabla);
        } else {
            $response = array("response" => false, "body" => [""]);
        }
        return $response;
    }

    public function GetContactInfo()
    {
        $query = "SELECT DISTINCT cartera.nit, datoscontacto.NIT, datoscontacto.ContactoCliente, datoscontacto.Email 
                    FROM cartera, datoscontacto WHERE cartera.nit = datoscontacto.NIT";
        // $query = "SELECT * FROM datoscontacto";
        $consulta = mysqli_query($this->conexion, $query);
        if ($consulta) {
            $resultados = mysqli_fetch_all($consulta);
            // $resultados = array("response" => true, "body" => $resultados);
        } else {
            $resultados = array("response" => false, "body" => [""]);
        }
        return $resultados;
    }
}
