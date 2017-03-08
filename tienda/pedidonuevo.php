<html>
	<head>
		<title>colors</title>
	</head>
	<body>

		<center><h1>Nuevo color</h1></center>

		<form name="nuevo_pedido" method="POST" action="guardarpedido.php">
			<table width="50%">
				<tr>
					<td width="20"><b>fecha</b></td>
					<td width="30"><input type="date" name="fecha" size="25" /></td>
				</tr>
				<tr>
					<td><b>proveedor</b></td>
					<td><input type="text" name="proveedor" size="25" /></td>
				</tr>

				<tr>
					<td colspan="2"><center><input type="submit" name="eviar" value="Registrar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>
