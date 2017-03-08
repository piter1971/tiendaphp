<?php

	require('conexion.php');

	$color=$_POST['color'];
	$cuidad=$_POST['cuidad'];
	$nombre=$_POST['nombre'];
	$peso=$_POST['peso'];

	$query="INSERT INTO piezas (color, cuidad, nombre,peso) VALUES ('$color','$cuidad','$nombre','$peso')";

	$resultado=$mysqli->query($query);

?>

<html>
	<head>
		<title>Guardar Pieza</title>
	</head>
	<body>
		<center>

			<?php if($resultado>0){ ?>
				<h1>Pieza Guardada</h1>
				<?php }else{ ?>
				<h1>Error al Guardar pieza</h1>
			<?php	} ?>

			<p></p>

			<a href="piezas.php">Regresar</a>

		</center>
	</body>
	</html>
