<?php
require_once 'cn.php';

class helper{
/*
 public function mostrarError($errores, $campo){

   $alerta = '';
   if(isset($errores[$campo]) && !empty($campo)){
   $alerta ="<div class='alerta alerta-error'>".errores[$campo].'</div>';

   }
   return $alerta;

}
*/


  public function validar($usuario,$password){
    
    $conexion = new conexion;
    $sql = "SELECT usuario,contraseña FROM usuario where usuario = '{$usuario}' and contraseña ='{$password}'";
    $result = mysqli_query($conexion->conectar(),$sql);    
    $resultfin = mysqli_num_rows($result);
    try{ ($row = mysqli_num_rows(resultfin)){
       $_SESSION['usuario'] = $resultfin['usuario'];
    }else{
      return false; 
    }catch(Exception $e){
       mysqli::close($conexion->conectar());
       return false;
    }else{
       return false;
    }


  }


  }
}