<?php
	require('conexion.php');

	$query="SELECT id, color, cuidad,nombre,peso FROM piezas";

	$resultado=$mysqli->query($query);

?>

<html>
	<head>
		<title>Usuarios</title>
		<link rel="StyleSheet" href="est.css" type="text/css">
	</head>
	<body>
<div id="tablapiezas">
		<center><h1>Listado de piezas</h1></center>

		<a href="piezanueva.php">Piezas nuevas</a>

		<p></p>

		<table border=1 wcod_piezath="80%">
			<thead>
				<tr>
					<td></td>
					<td></td>
					<td><b>cod_pieza</b></td>
					<td><b>color</b></td>
					<td><b>cod_pieza</b></td>
					<td><b>nombre</b></td>
					<td><b>peso</b></td>


				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td>
								<input type=image src="imag/edit.gif" href="modificarpieza.php?id=<?php echo $row['id'];?>"></a>
								<!--<input type=image src="imag/BotPed.gif"  id="Ped" onclick=" location.href='pedidos.php' " >-->
							</td>
							<td>
								<a   id="eliminar"  href="eliminarpieza.php?id=<?php echo $row['id'];?>">  elimminar</a>
							</td>
							<td><?php echo $row['id'];?>
							</td>
							<td>
								<?php echo $row['color'];?>
							</td>
							<td>
								<?php echo $row['cuidad'];?>
							</td>
							<td>
								<?php echo $row['nombre'];?>
							</td>
							<td>
								<?php echo $row['peso'];?>
							</td>

						</tr>


					<?php } ?>
				</tbody>




			</table>

			<br>
			<br>
			<td><a href="Principal.php">Regresar</a></td>
			</div>

			</table>
		</body>
	</html>
