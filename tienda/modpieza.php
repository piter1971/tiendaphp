<?php

	require('conexion.php');

	$id=$_POST['id'];
	$color=$_POST['color'];
	$cuidad=$_POST['cuidad'];
	$nombre=$_POST['nombre'];
	$peso=$_POST['peso'];

	$query="UPDATE piezas SET color='$color', cuidad='$cuidad', nombre='$nombre', peso='$peso' WHERE id='$id'";

	$resultado=$mysqli->query($query);

?>

<html>
	<head>
		<title>Modificar pieza</title>
		<link rel="StyleSheet" href="est.css" type="text/css">
	</head>

	<body>
		<center>

			<?php
				if($resultado>0){
				?>

				<h1>Pieza Modificada</h1>

					<?php 	}else{ ?>

				<h1>Error al Modificar color</h1>

			<?php	} ?>

			<p></p>

			<a href="piezas.php">Regresar</a>

		</center>
	</body>
</html>
