<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM certificados WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$Codigo_Interno = $resultData['Codigo_Interno'];
$Nombre_Participante = $resultData['Nombre_Participante'];
$Rut_Participante = $resultData['Rut_Participante'];
$Empresa = $resultData['Empresa'];
$Rut_Empresa = $resultData['Rut_Empresa'];
$Fecha_Inicio_Curso = $resultData['Fecha_Inicio_Curso'];
$Fecha_Fin_Curso = $resultData['Fecha_Fin_Curso'];
$Nombre_Curso = $resultData['Nombre_Curso'];
$Horas_Curso = $resultData['Horas_Curso'];
$Ciudad = $resultData['Ciudad'];
$Fecha_Expiracion = $resultData['Fecha_Expiracion'];
$Nota = $resultData['Nota'];

?>
<html>
<head>	
	<title>Editar Certificado</title>
	    <link rel="icon" href="favicon.png" type="image/x-icon">

</head>

<body>
    <h2>Editar Certificado</h2>
    <p>
	    <a href="index.php">Inicio</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php">
		<table border="0">
			<tr> 
				<td>Codigo_Interno</td>
				<td><input type="text" name="Codigo_Interno" value="<?php echo $Codigo_Interno; ?>"></td>
			</tr>
			<tr> 
				<td>Nombre_Participante</td>
				<td><input type="text" name="Nombre_Participante" value="<?php echo $Nombre_Participante; ?>"></td>
			</tr><tr> 
				<td> Rut_Participante </td>
				<td><input type="text" name="Rut_Participante" value="<?php echo $Rut_Participante; ?>"></td>
			</tr><tr> 
				<td> Empresa </td>
				<td><input type="text" name="Empresa" value="<?php echo $Empresa; ?>"></td>
			</tr><tr> 
				<td> Rut_Empresa </td>
				<td><input type="text" name="Rut_Empresa" value="<?php echo $Rut_Empresa; ?>"></td>
			</tr><tr> 
				<td> Fecha_Inicio_Curso </td>
				<td><input type="text" name="Fecha_Inicio_Curso" value="<?php echo $Fecha_Inicio_Curso; ?>"></td>
			</tr><tr> 
				<td> Fecha_Fin_Curso </td>
				<td><input type="text" name="Fecha_Fin_Curso" value="<?php echo $Fecha_Fin_Curso; ?>"></td>
			</tr><tr> 
				<td> Nombre_Curso </td>
				<td><input type="text" name="Nombre_Curso" value="<?php echo $Nombre_Curso; ?>"></td>
			</tr><tr> 
				<td> Horas_Curso </td>
				<td><input type="text" name="Horas_Curso" value="<?php echo $Horas_Curso; ?>"></td>
			</tr><tr> 
				<td> Ciudad </td>
				<td><input type="text" name="Ciudad" value="<?php echo $Ciudad; ?>"></td>
			</tr><tr> 
				<td> Fecha_Expiracion </td>
				<td><input type="text" name="Fecha_Expiracion" value="<?php echo $Fecha_Expiracion; ?>"></td>
			</tr><tr> 
				<td> Nota </td>
				<td><input type="text" name="Nota" value="<?php echo $Nota; ?>"></td>
			</tr>
			
			
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Actualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>
