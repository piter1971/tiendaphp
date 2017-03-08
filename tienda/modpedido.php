<?php

	require('conexion.php');

	$id=$_POST['id'];
	$fecha=$_POST['fecha'];
	$proveedor=$_POST['proveedor'];


	$query="UPDATE pedido SET fecha='$fecha', proveedor='$proveedor' WHERE id='$id'";

	$resultado=$mysqli->query($query);

?>

<html>
	<head>
		<title>Modificar Pedido</title>
	</head>

	<body>
		<center>

			<?php
				if($resultado>0){
				?>

				<h1>Pedido Modificada</h1>

					<?php 	}else{ ?>

				<h1>Error al Modificar pedio</h1>

			<?php	} ?>

			<p></p>

			<a href="pedidos.php">Regresar</a>

		</center>
	</body>
</html>
