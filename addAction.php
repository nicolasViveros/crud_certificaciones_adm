<html>
<head>
	<title>Agregar certificado</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");


if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$Codigo_Interno = mysqli_real_escape_string($mysqli, $_POST['Codigo_Interno']);
	$Nombre_Participante = mysqli_real_escape_string($mysqli, $_POST['Nombre_Participante']);
	$Rut_Participante = mysqli_real_escape_string($mysqli, $_POST['Rut_Participante']);
	$Empresa = mysqli_real_escape_string($mysqli, $_POST['Empresa']);
	$Rut_Empresa = mysqli_real_escape_string($mysqli, $_POST['Rut_Empresa']);
	$Fecha_Inicio_Curso = mysqli_real_escape_string($mysqli, $_POST['Fecha_Inicio_Curso']);
	$Fecha_Fin_Curso = mysqli_real_escape_string($mysqli, $_POST['Fecha_Fin_Curso']);
	$Nombre_Curso = mysqli_real_escape_string($mysqli, $_POST['Nombre_Curso']);
	$Horas_Curso = mysqli_real_escape_string($mysqli, $_POST['Horas_Curso']);
	$Ciudad = mysqli_real_escape_string($mysqli, $_POST['Ciudad']);
	$Fecha_Expiracion = mysqli_real_escape_string($mysqli, $_POST['Fecha_Expiracion']);
	$Nota = mysqli_real_escape_string($mysqli, $_POST['Nota']);
	

	// Check for empty fields
	//*if ( empty($Codigo_Interno) || empty($Nombre_Participante) || empty($Rut_Participante) empty($Empresa) || empty($Rut_Empresa) || empty($Fecha_Inicio_Curso) || empty($Fecha_Fin_Curso) || empty($Nombre_Curso) || empty($Horas_Curso) || empty($Ciudad) || empty($Fecha_Expiracion) || empty($Nota) ) {
		
		//	echo "<font color='red'>Existen campos vacíos.</font><br/>";
		
		// Show link to the previous page
		//echo "<br/><a href='javascript:self.history.back();'>Regresar</a>";
	//} else { 
		// If all the fields are filled (not empty) 
		
	

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO certificados (`id`,`Codigo_Interno`,`Nombre_Participante`,`Rut_Participante`,`Empresa`,`Rut_Empresa`,`Fecha_Inicio_Curso`,`Fecha_Fin_Curso`,`Nombre_Curso`,`Horas_Curso`,`Ciudad`,`Fecha_Expiracion`,`Nota`) VALUES (NULL,'$Codigo_Interno', '$Nombre_Participante', '$Rut_Participante','$Empresa', '$Rut_Empresa', '$Fecha_Inicio_Curso','$Fecha_Fin_Curso', '$Nombre_Curso', '$Horas_Curso','$Ciudad', '$Fecha_Expiracion', '$Nota')");
		
		// Display success message
		echo "<p><font color='green'>Certificado agregado correctamente!</p>";
		echo "<a href='index.php'>Ver Resultado</a>";
	//}	
	
}
?>
</body>
</html>
