<?php require_once 'includes/cn.php'; ?>


<!DOCTYPE HTML>
<html lang="es">
    <head>      
		<meta charset="utf-8" />
		<title>Maqueta</title>
		<link rel="stylesheet" type="text/css" href="asset/css/Style.css" />
    </head>
    <body>



	<!-- login antiguo 
	<div id="login" class="bloque">
		<h3>Identificate</h3>
		
		
                <form action="login.php" method="POST"> 
                    <label for="usuario">Usuario</label>
                    <input type="Text" name="usuario" />
        
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" />
                    <input type="submit" value="Entrar" />
            </form>
	</div>
-->

  <?php if(!isset($_SESSION['usuario'])): ?>
	 <div id="login" class="bloque">
		<h3>Identificate</h3>
		
		<?php if(isset($_SESSION['error_login'])): ?>
			<div class="alerta alerta-error">
				<?=$_SESSION['error_login'];?>
			</div>
		<?php endif; ?>
		
		<form action="login.php" method="POST"> 
			<label for="usuario">Usuario</label>
			<input type="Text" name="usuario" />

			<label for="password">Contraseña</label>
			<input type="password" name="password" />

			<input type="submit" value="Entrar" />
		</form>
   <?php endif; ?>  
	</div>

    </body>

</html>