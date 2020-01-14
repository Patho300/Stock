<?php
// Iniciar la sesión y la conexión a bd
require_once 'includes/cn.php';

if (isset($_POST)) 
{
	// Borrar error antiguo
	if(isset($_SESSION['cerrar_sesion'])){
    session_unset();
    session_destroy();
  }
  
  if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
      case 1:
        header('Location: dash_admin.php');
      break;
      case 2:
        header('Location: dash_usuario.php');
      break;
      default:
    }

  }


  if(isset($_POST['usuario']) && isset($_POST['password'])){
    
    $usuario  = $_POST['usuario'];
    $password = $_POST['password'];
    $db = new Conexion;
    $query = ('SELECT * FROM usuarios where usuario=:usuario AND password=:password');
    $rg= $db->prepare($query);
    $query->execute(['username' => $usuario, 'password' => $password]);
    $row = $query->fetch(PDO::FETCH_NUM);
    if($row == true){
      echo "se encontro el match!";
    }else{
      echo "No se encontro naaa";
    }
  }

}
 

 



 
 /*
 var_dump($_POST);
 var_dump($_SESSION);
 die();
 */
 /*
    if ($_SESSION['usuario']=$usuario)
    { 
      header('Location: dash.php');
    }else{
      $_SESSION['error_login'] = "Login incorrecto!!";
    }

*/






