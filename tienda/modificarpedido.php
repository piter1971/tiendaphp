<?php

	require('conexion.php');

	$id=$_GET['id'];

	$query="SELECT fecha,proveedor FROM pedido WHERE id='$id'";

	$resultado=$mysqli->query($query);

	$row=$resultado->fetch_assoc();

?>

<html>
	<head>
		<title>modificarPedido</title>
	</head>
	<body>

		<center><h1>Modificar Pedido</h1></center>

		<form name="modificar_pedido" method="POST" action="modpedido.php">

			<table width="50%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>color</b></td>
					<td width="30"><input type="date" name="fecha" size="25" value="<?php echo $row['fecha']; ?>" /></td>
				</tr>
				<tr>
					<td><b>cuidad</b></td>
					<td><input type="text" name="proveedor" size="25" value="<?php echo $row['proveedor']; ?>" /></td>
				</tr>
				
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>
