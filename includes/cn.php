<?php
##conexion bd##
$server ='localhost';
$user= 'administrador';
$password = 'patovildo';
$database ='stock';
$db = mysqli_connect($server, $user, $password, $database); 

mysqli_query($db, "SET NAMES 'utf8'");


