<?php

    header("Access-Control-Allow-Origin: *"); 
    include("conexion.php");
    
 
 $Nombre_del_estudiante = $_POST["Nombre_del_estudiante"];
 $Codigo_del_estudiante = $_POST["Codigo_del_estudiante"];
 $Nota_Final = $_POST["Nota_Final"];
 $Materia = $_POST["Materia"];
 
 
 $sql = "INSERT INTO notas(Nombre_del_estudiante,Codigo_del_estudiante,Nota_Final,materia ) VALUES ('" . $Nombre_del_estudiante . "','" . $Codigo_del_estudiante . "','" . $Nota_Final . "','" . $Materia . "')";

 $query = mysqli_query($conexion, $sql);
 
 if($query)
 {
  echo "Se registro la nota";
 }
 else
 {
  echo "No fue posible registrar la nota";
 }
 
 mysqli_close($conexion);
?>