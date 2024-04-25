<html>
<head>
	<title>Agregar Certificado</title>
	    <link rel="icon" href="favicon.png" type="image/x-icon">

</head>

<body>
	<h2>Agregar certificado</h2>
	<p>
		<a href="index.php">Inicio</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Codigo_Interno</td>
				<td><input type="text" name="Codigo_Interno"></td>
			</tr>
			<tr> 
				<td>Nombre_Participante</td>
				<td><input type="text" name="Nombre_Participante"></td>
			</tr>
			<tr> 
				<td>Rut_Participante</td>
				<td><input type="text" name="Rut_Participante"></td>
			</tr>
			<tr> 
				<td>Empresa</td>
				<td><input type="text" name="Empresa"></td>
			</tr>
			<tr> 
				<td>Rut_Empresa</td>
				<td><input type="text" name="Rut_Empresa"></td>
			</tr>
			<tr> 
				<td>Fecha_Inicio_Curso</td>
				<td><input type="text" name="Fecha_Inicio_Curso"></td>
			</tr>
			<tr> 
				<td>Fecha_Fin_Curso</td>
				<td><input type="text" name="Fecha_Fin_Curso"></td>
			</tr>
			<tr> 
				<td>Nombre_Curso</td>
				<td><input type="text" name="Nombre_Curso"></td>
			</tr>
			<tr> 
				<td>Horas_Curso</td>
				<td><input type="text" name="Horas_Curso"></td>
			</tr>
			<tr> 
				<td>Ciudad</td>
				<td><input type="text" name="Ciudad"></td>
			</tr>
			<tr> 
				<td>Fecha_Expiracion</td>
				<td><input type="text" name="Fecha_Expiracion"></td>
			</tr>
			<tr> 
				<td>Nota</td>
				<td><input type="text" name="Nota"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Agregar"></td>
			</tr>
		</table>
	</form>
</body>
</html>

