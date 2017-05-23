<?php
header("Access-Control-Allow-Origin: *");
	include("conexion.php");
	
	$Codigo_del_estudiante = $_POST["Codigo_del_estudiante"];
	
	$sql = "SELECT * FROM notas WHERE Codigo_del_estudiante = '".$Codigo_del_estudiante."'";
	
	$query = mysqli_query($conexion, $sql);
	
	$cantidadRegistros = mysqli_num_rows($query);
	
	if($cantidadRegistros > 0)
	{
		$tabla = "<table class='table table-striped'>";
		$tabla = $tabla . "<tr><th>Nombre Estudiante</th><th>Codigo</th><th>Nota Final</th><th>Materia</th></tr>";
		while($row = mysqli_fetch_array($query))
		{
			$tabla = $tabla . "<tr><td>" . $row["Nombre_del_estudiante"] . "</td>";
			$tabla = $tabla . "<td>" . $row["Codigo_del_estudiante"] . "</td>";
			$tabla = $tabla . "<td>" . $row["Nota_Final"] . "</td>";
			$tabla = $tabla . "<td>" . $row["materia"] . "</td></tr>";
			
		}		

		$tabla = $tabla . "</table>";
		echo $tabla;
	}
	else
	{
		echo "No hay registros";
	}

	mysqli_close($conexion);

?>

