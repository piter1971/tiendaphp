<?php
	require('conexion.php');

	$query="SELECT id, fecha, proveedor FROM pedido";

	$resultado=$mysqli->query($query);

?>

<html>
	<head>
		<title>pedidos</title>
	</head>
	<body>

		<center><h1>Pedidos</h1></center>

		<a href="pedidonuevo.php">Nuevo usuario</a>
		<p></p>

		<table border=1 wcod_piezath="80%">
			<thead>
				<tr>
					<td></td>
					<td></td>
					<td><b>cod_pedido</b></td>
					<td><b>fechar</b></td>
					<td><b>proveedor</b></td>



				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td>
								<a href="modificarpedido.php?id=<?php echo $row['id'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminarpedido.php?id=<?php echo $row['id'];?>">Eliminar</a>
							</td>
							<td><?php echo $row['id'];?>
							</td>
							<td>
								<?php echo $row['fecha'];?>
							</td>
							<td>
								<?php echo $row['proveedor'];?>
							</td>


						</tr>
					<?php } ?>
				</tbody>
			</table>

			</table>
		</body>
	</html>
