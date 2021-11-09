<?php

class data_connect
{
    public $hostname = "localhost";
    public $database = "davivienda2";
    public $username = "root";
    public $password = "";
    public $conexion;

    public function getConnection()
    {
        try {
            $this->conexion = mysqli_connect($this->hostname, $this->username, $this->password);
            $this->conexion = new mysqli($this->hostname, $this->username, $this->password, $this->database);            
            
        } catch (Exception $th) {
            throw new Exception("<p><h1>!!!Conexion fallida!!! ".$th->getMessage()."</h1></p>", 1);
            // echo "Error encontrado: " . $th->getMessage();
            return $th;            
            exit();
        }
    }
}

// if ($this->conexion->connect_errno) {
//     echo "No se ha podido establecer la conexion";
//     exit();
// } else {
//     // echo "Conexion exitosa, aqui estan los datos\n";
//     return $this->conexion;
// }


// try {

//     if ($miNewCon->conexion->connect_errno) {
//         throw new Exception("<p>No se ha podido establecer la conexion</p>", 1);
//         // exit();
//     } else {
//         // echo "Conexion exitosa, aqui estan los datos\n";

//     }
// } catch (Exception $th) {
//     echo "<p> Error encontrado: </p>" . $th->getMessage() . "\n";
// }