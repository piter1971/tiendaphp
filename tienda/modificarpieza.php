<?php

	require('conexion.php');

	$id=$_GET['id'];

	$query="SELECT color, cuidad, nombre, peso FROM piezas WHERE id='$id'";

	$resultado=$mysqli->query($query);

	$row=$resultado->fetch_assoc();

?>

<html>
	<head>
		<title>modificarPiezas</title>
		<link rel="StyleSheet" href="est.css" type="text/css">
	</head>
	<body>

		<center><h1>Modificar Pieza</h1></center>

		<form name="modificar_usuario" method="POST" action="modpieza.php">
			<div id="modificarpieza">

			<table width="50%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>color</b></td>
					<td width="30"><input type="text" name="color" size="25" value="<?php echo $row['color']; ?>" /></td>
				</tr>
				<tr>
					<td><b>cuidad</b></td>
					<td><input type="text" name="cuidad" size="25" value="<?php echo $row['cuidad']; ?>" /></td>
				</tr>
				<tr>
					<td><b>nombre</b></td>
					<td><input type="text" name="nombre" size="25" value="<?php echo $row['nombre']; ?>" /></td>
				</tr>
				<tr>
					<td><b>peso</b></td>
					<td><input type="text" name="peso" size="25" value="<?php echo $row['peso']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
			<td><a href="Principal.php">Regresar</a></td>
		</div>
		</form>
	</body>
</html>
