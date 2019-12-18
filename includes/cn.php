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
    


    public static function conectar(){
     
      $link = new PDO("mysql:host=localhost;dbname=stock","administrador","patovildo");
      $link->exec('set names utf8');
      return $link;
    
    }

}



    


