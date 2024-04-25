<?php
// SESSION
session_start();

if ($_SESSION['status'] != true) {
    header("location: login.php");
}

// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM certificados ORDER BY id DESC");
?>
<html>
<head>
        <link rel="icon" href="favicon.png" type="image/x-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
	<title>Certificaciones</title>
</head>

<body>
	<h2>Certificaciones</h2>
	<p>
		<a href="add.php">Agregar Nuevo</a>
		<a href="logout.php">Cerrar Sesión</a>
	</p>
	<table width='80%' border=0 id="myTable" class="display">
	    <thead>
		<tr bgcolor='#DDDDDD'>
			<th><strong>Codigo Interno</strong></th>
			<th><strong>Nombre Participante</strong></th>
			<th><strong>Rut Participante</strong></th>
			<th><strong>Empresa</strong></th>
			<th><strong>Rut Empresa</strong> </th>
			<th><strong>Fecha Inicio Curso</strong></th>
			<th><strong>Fecha Fin Curso</strong></th>
			<th><strong>Nombre Curso</strong></th>
			<th><strong>Horas Curso</strong></th>
			<th><strong>Ciudad</strong></th>
			<th><strong>Fecha Expiracion</strong></th>
			<th><strong>Nota</strong></th>
			<th><strong> </strong></th>
			<th><strong> </strong></th>
			<th><strong> </strong></th>
			<th><strong> </strong></th>
		</tr>
		</thead>
        <tbody>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$res['Codigo_Interno']."</td>";
				echo "<td>".$res['Nombre_Participante']."</td>";
				echo "<td>".$res['Rut_Participante']."</td>";
				echo "<td>".$res['Empresa']."</td>";
				echo "<td>".$res['Rut_Empresa']."</td>";
				echo "<td>".$res['Fecha_Inicio_Curso']."</td>";
				echo "<td>".$res['Fecha_Fin_Curso']."</td>";
				echo "<td>".$res['Nombre_Curso']."</td>";
				echo "<td>".$res['Horas_Curso']."</td>";
				echo "<td>".$res['Ciudad']."</td>";
				echo "<td>".$res['Fecha_Expiracion']."</td>";
				echo "<td>".$res['Nota']."</td>";
				echo "<td><a href=\"https://admtraining.cl/certificaciones/qr/index.php?data=https://admtraining.cl/certificaciones/show.php?id=$res[id]\" target='_blank'>QR</a></td>";
				echo "<td><a href=\"show.php?id=$res[id]\">Ver</a></td>";
				echo "<td><a href=\"edit.php?id=$res[id]\">Editar</a></td>";
				echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Estás seguro de querer borrar?')\">Borrar</a></td>";
			}
		?>
		</tbody>
	</table>

<script>

let table = new DataTable('#myTable', {
    responsive: true
});
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
</body>
</html>
