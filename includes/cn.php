<?php
##conexion bd##
/*

$server ='localhost';
$user= 'administrador';
$password = 'patovildo';
$database ='stock';
$db = mysqli_connect($server, $user, $password, $database); 

mysqli_query($db, "SET NAMES 'utf8'");

*/


class Conexion {

    private $server ='localhost';
    private $user='administrador';
    private $password ='patovildo';
    private $database ='stock';


    public static function conectar(){
     try{
    $conection = mysqli_connect("server=$this->server user=$this->user password=$this->password database=$this->database");
    return $conection;
    
     }catch(Exception $e){

        echo "No se puede conectar esta caga";
        exit();
     }

    }

}


