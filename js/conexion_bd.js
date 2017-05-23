window.onload = function()
{
 $("#guardar").click(enviar);
 $("#buscar").click(buscar);
}

function enviar() 
{ 
  var Nombre_del_estudiante = $("#nombre_estudiante").val(); 
  var Codigo_del_estudiante = $("#codigo_estudiante").val(); 
  var Nota_Final = $("#nota").val(); 
  var Materia = $("#materia").val(); 

  $.ajax({ 
  async:true, 
  type: "POST", 
  dataType: "html", contentType: "application/x-www-form-urlencoded", 
  url:"https://santiagocl1708.000webhostapp.com/notas/conexion_base_d.php", 
  data:"Nombre_del_estudiante="+Nombre_del_estudiante+"&Codigo_del_estudiante="+Codigo_del_estudiante+"&Nota_Final="+Nota_Final+"&Materia="+Materia, beforeSend:inicioEnvio, success:llegadaDatos, 
  timeout:4000, 
  error:problemas }); 
  return false; 
} 


function buscar() 
{ 

  var Codigo_del_estudiante = $("#codigo_estudiante").val(); 
  
  $.ajax({ 
  async:true, 
  type: "POST", 
  dataType: "html", contentType: "application/x-www-form-urlencoded", 
  url:"https://santiagocl1708.000webhostapp.com/notas/consulta_nota.php", 
  data:"Codigo_del_estudiante="+Codigo_del_estudiante, beforeSend:inicioEnvio, success:llegadaDatosTabla, 
  timeout:4000, 
  error:problemas }); 
  return false; 
} 

 function inicioEnvio(datos)
{
 
}

function llegadaDatos(datos)
{
	
	alert(datos);
}

function llegadaDatosTabla(datos)
{
	$("#notasCon").html(datos);
	
}

function problemas()
{
 alert("Error");
}
