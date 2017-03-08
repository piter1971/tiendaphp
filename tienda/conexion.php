<?php


	$mysqli=new mysqli("localhost","root","","tiendaphp"); //servidor, color de base de datos, contraseña del color, nombre de base de datos

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>
