<?php

class DB{
    private $connection;
    private $server = "localhost:3308";
    private $user = "root";
    private $password = "root";
    private $database = "landingPage";
    private $port = 3308;

    function __construct(){
        $this->databaseConnect();
    }

    public function databaseConnect(){
        $this->connection = mysqli_connect($this->server,$this->user,$this->password,$this->database);
        if(mysqli_connect_error()){
            die("Conexión con la base de datos fallida debido a que: ".mysqli_connect_error().mysqli_connect_errno());
        }
    }   

    public function sanitizeProtection($var){
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }

    public function createInsertion($name,$surname,$email,$phone,$id,$message){
        $sqlQuery = "INSERT INTO `registros` (nombre,apellidos,email,telefono,id,mensaje) VALUES ('$name','$surname','$email',$phone,$id,'$message')";
        $executeQuery = mysqli_query($this->connection, $sqlQuery);
        if ($executeQuery){
            return true;
        }else{
            return false;
        }
    }


}





?>