<?php

	require('conexion.php');

	$fecha=$_POST['fecha'];
	$proveedor=$_POST['proveedor'];


	$query="INSERT INTO pedido (fecha, proveedor) VALUES ('$fecha','$proveedor')";

	$resultado=$mysqli->query($query);

?>

<html>
	<head>
		<title>Guardar pedido</title>
	</head>
	<body>
		<center>

			<?php if($resultado>0){ ?>
				<h1>pedido Guardada</h1>
				<?php }else{ ?>
				<h1>Error al Guardar pedido</h1>
			<?php	} ?>

			<p></p>

			<a href="pedidos.php">Regresar</a>

		</center>
	</body>
	</html>
