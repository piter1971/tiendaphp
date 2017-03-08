<html>
	<head>
		<title>colors</title>
		<link rel="StyleSheet" href="est.css" type="text/css">
	</head>
	<body>
		<div id="piezanueva">

		<center><h1>ingresar pieza nueva</h1></center>

		<form name="nuevo_usuario" method="POST" action="guardapieza.php">

			<table width="50%">

				<tr>
					<td width="20"><b>color</b></td>
					<td width="30"><input type="text" name="color" size="25" /></td>
				</tr>
				<tr>
					<td><b>cuidad</b></td>
					<td><input type="text" name="cuidad" size="25" /></td>
				</tr>
				<tr>
					<td><b>nombre</b></td>
					<td><input type="text" name="nombre" size="25" /></td>
				</tr>
				<tr>
					<td><b>peso</b></td>
					<td><input type="text" name="peso" size="25" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="eviar" value="Registrar" /></center></td>
				</tr>
				<tr>

				</tr>
			</table>
			<td><a href="Principal.php">Regresar</a></td>
		</form>
	</div>
	</body>
</html>
