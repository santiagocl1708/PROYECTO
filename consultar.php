<!DOCTYPE html>
<html>
<head>
 <title>loguin</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   <script src="js/conexion_bd.js"></script>

</head>
 
<body class="login2background">
        <div class="container">  
            <div class="col-lg-6 col-md-6 col-sm-8  loginbox">
                <div class=" row">
                   
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6  id="notasCon">
                        <span class="singtext" >Notas</span>   
                    </div>
                                 
                </div>
                <div class=" row loginbox_content ">                        
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">
                            <span class=""></span>
                        </span>
                        <input id="codigo_estudiante" class="form-control" type="password" placeholder="Codigo del estudiante" >
                    </div> 
                    <br>

                    
                <div class="row ">                   
                    <div class="col-lg-4 col-md-4 col-sm-4  col-xs-5 ">                        
                        <a href="#" class=" btn btn-default" id="buscar">Buscar <span class="glyphicon glyphicon-log-in"></span> </a> 
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-4 "></div>


        </div>
   

</body>
</html>