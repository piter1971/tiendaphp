<?php

	require('conexion.php');

	$id=$_GET['id'];

	$query="DELETE FROM pedido WHERE id='$id'";

	$resultado=$mysqli->query($query);

?>

<html>
	<head>
		<title>Eliminar pedido</title>
		<link rel="StyleSheet" href="est.css" type="text/css">
	</head>

	<body>
		<center>
			<?php
				if($resultado>0){
				?>

				<h1>pedido Eliminado</h1>

				<?php 	}else{ ?>

				<h1>Error al Eliminar pedido</h1>

			<?php	} ?>
			<p></p>

			<a href="pedidos.php">Regresar</a>

		</center>
	</body>
</html>
