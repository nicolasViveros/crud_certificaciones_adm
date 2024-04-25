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

<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="favicon.png" type="image/x-icon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Certificado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <div class="container">
		
			<div class="row row-cols-2">
				<div class="col col-md-4">
				<img src="https://admtraining.cl/certificaciones/logo-pequeno.png" >
				</div>

				<div class="col col-md-4">
				<center><img src="https://admtraining.cl/certificaciones/check.png" alt="centered image" width="110px; " ></center>
				</div>
				
				<div class="col col-md-4">
				
				</div>
			</div>
			
			
            
			<h1>Certificado Válido</h1>

            <div class="row row-cols-2">
              <div class="col col-md-4">
                Código Interno:
              </div>
              <div class="col col-md-8">
                <span class="align-baseline"><?php echo $Codigo_Interno; ?></span>
              </div>
            </div>

		  <div class="row row-cols-2">
              <div class="col col-md-4">
                Nombre Participante:
              </div>
              <div class="col col-md-8">
                <span class="align-baseline"><?php echo $Nombre_Participante; ?></span>
              </div>
        	</div>
    	

		<div class="row row-cols-2">
              <div class="col col-md-4">
			  Rut Participante:
              </div>
              <div class="col col-md-8">
                <span class="align-baseline"><?php echo $Rut_Participante; ?></span>
              </div>
            </div><div class="row row-cols-2">
              <div class="col col-md-4">
			Empresa:
              </div>
              <div class="col col-md-8">
                <span class="align-baseline"><?php echo $Empresa; ?></span>
              </div>
            </div><div class="row row-cols-2">
              <div class="col col-md-4">
			  Rut Empresa:
              </div>
              <div class="col col-md-8">
                <span class="align-baseline"><?php echo $Rut_Empresa; ?></span>
              </div>
            </div><div class="row row-cols-2">
              <div class="col col-md-4">
			  Fecha Inicio Curso:
              </div>
              <div class="col col-md-8">
                <span class="align-baseline"><?php echo $Fecha_Inicio_Curso; ?></span>
              </div>
            </div><div class="row row-cols-2">
              <div class="col col-md-4">
			  Fecha Fin Curso:
              </div>
              <div class="col col-md-8">
                <span class="align-baseline"><?php echo $Fecha_Fin_Curso; ?></span>
              </div>
            </div><div class="row row-cols-2">
              <div class="col col-md-4">
			  Nombre Curso:
              </div>
              <div class="col col-md-8">
                <span class="align-baseline"><?php echo $Nombre_Curso; ?></span>
              </div>
            </div><div class="row row-cols-2">
              <div class="col col-md-4">
			  Horas Curso:
              </div>
              <div class="col col-md-8">
                <span class="align-baseline"><?php echo $Horas_Curso; ?></span>
              </div>
            </div><div class="row row-cols-2">
              <div class="col col-md-4">
			  Ciudad:
              </div>
              <div class="col col-md-8">
                <span class="align-baseline"><?php echo $Ciudad; ?></span>
              </div>
            </div><div class="row row-cols-2">
              <div class="col col-md-4">
			  Fecha Expiración:
              </div>
              <div class="col col-md-8">
                <span class="align-baseline"><?php echo $Fecha_Expiracion; ?></span>
              </div>
            </div><div class="row row-cols-2">
              <div class="col col-md-4">
			  Nota:
              </div>
              <div class="col col-md-8">
                <span class="align-baseline"><?php echo $Nota; ?></span>
              </div>
            </div>
          
      
</body>
</html>
