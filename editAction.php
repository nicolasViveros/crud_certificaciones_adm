<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
// $id = $
//_GET['id'];


if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);

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
	// if (empty($name) || empty($age) || empty($email)) {
	//	if (empty($name)) {
	//		echo "<font color='red'>Name field is empty.</font><br/>";
	//	}
		
	//	if (empty($age)) {
	//		echo "<font color='red'>Age field is empty.</font><br/>";
	//	}
		
	//	if (empty($email)) {
	//		echo "<font color='red'>Email field is empty.</font><br/>";
	//	}
	// } else {
		// Update the database table
		
		  // $result = mysqli_query($mysqli, "UPDATE certificados SET `name` = '$name', `age` = '$age', `email` = '$email' WHERE `id` = $id");
		// echo "UPDATE certificados SET `Codigo_Interno` = '$Codigo_Interno', `Nombre_Participante` = '$Nombre_Participante', `Rut_Participante` = '$Rut_Participante', `Empresa` = '$Empresa', `Rut_Empresa` = '$Rut_Empresa', `Fecha_Inicio_Curso` = '$Fecha_Inicio_Curso', `Fecha_Fin_Curso` = '$Fecha_Fin_Curso', `Nombre_Curso` = '$Nombre_Curso', `Horas_Curso` = '$Horas_Curso', `Ciudad` = '$Ciudad', `Fecha_Expiracion` = '$Fecha_Expiracion', `Nota` = '$Nota' WHERE `id` =  $id";
		
	  $result = mysqli_query($mysqli, "UPDATE certificados SET `Codigo_Interno` = '$Codigo_Interno', `Nombre_Participante` = '$Nombre_Participante', `Rut_Participante` = '$Rut_Participante', `Empresa` = '$Empresa', `Rut_Empresa` = '$Rut_Empresa', `Fecha_Inicio_Curso` = '$Fecha_Inicio_Curso', `Fecha_Fin_Curso` = '$Fecha_Fin_Curso', `Nombre_Curso` = '$Nombre_Curso', `Horas_Curso` = '$Horas_Curso', `Ciudad` = '$Ciudad', `Fecha_Expiracion` = '$Fecha_Expiracion', `Nota` = '$Nota' WHERE `id` =  $id"); 
		
		// Display success message
		echo "<p><font color='green'>Certificado Actualizado Correctamente!</p>";
		echo "<a href='index.php'>Ver Resultados</a>";
	}

