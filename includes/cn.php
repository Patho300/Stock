<?php
##conexion bd mysqli##
/*
$server ='localhost';
$user= 'root';
$password = '';
$database ='stock';
$db = mysqli_connect($server, $user, $password, $database); 
mysqli_query($db, "SET NAMES 'utf8'");
*/


##Conexion bd PDO y POO##

class Conexion {
    
   private $host;
   private $db;
   private $user;
   private $password;
   private $charset;

   public function __construct(){
     $this->host = 'localhost';
     $this->db = 'stock';
     $this->user = 'administrador';
     $this->password = 'patovildo';
     $this->charset = 'utf-8';

   }



     function conectar(){
     try {
         $cn ="mysql:host=". $this->host . ";dbname=" .$this->db . ";user=" .$this->user . ";password=" .$this->password ;
         $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES   => false,
         ];

         $pdo = new PDO($cn, $this->user, $this->password,$options);

     }catch(PDOExeception $e){
        echo "Error brutal!";
        print_r('Error Connection: '. $e->getMessage());
      }  
    
   } 

  

}

