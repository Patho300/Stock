<?php
// Iniciar la sesión y la conexión a bd
require_once 'includes/cn.php';

if (isset($_POST)) 
{

	// Borrar error antiguo
	if(isset($_SESSION['error_login'])){
		session_unset($_SESSION['error_login']);
	}
 
  $usuario  = $_POST['usuario'];
  $password = $_POST['password'];

   $sql   = "SELECT usuario,contraseña FROM usuario where usuario = '{$usuario}' and contraseña ='{$password}'";
   $login = mysqli_query($db, $sql);



 if ($login && mysqli_num_rows($login) == 1){
  $usuario   = mysqli_fetch_assoc($login);
  header('Location: dash.php');
     //comprueba la contraseña
    //$verificar = password_verify($password, $usuario['password']);
  }else{

    echo "Error!";
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

}



