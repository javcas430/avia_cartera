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