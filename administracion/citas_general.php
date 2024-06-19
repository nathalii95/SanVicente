<?php  
    session_start();
    if (!isset($_SESSION['nombre'])) {
        header('Location: index.php');
    
    }

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Title Page-->
    <title>Consultorio Medico "San Vicente"</title>    
            <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" href="images/consultorio.png" type="image" >

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet" media="all">

    <!-- Main CSS-->

</head>
<?php
include ('nav.php');
?>
<body class="animsition">
    <div class="page-wrapper">
        
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                              
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <?php

include ('nav1.php');


?>

                                            </div>
                                            
                                          
                                        </div>
                                    </div>
                                </div>
                                <?php

include ('slide.php');


?>

                            </div>
                        </div>
                    </div>
                </div>

            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT--><br><br>

  <div class=" col-sm-offset- col-lg-12 " >
  
    

   <div class="row">
      <div class="col-lg-12">
       <div style="width: 94%; margin-left: 20px; position:relative;top: 40px;" >

          <div class="alert " style="font-size: 15px; background:rgba(0, 125, 255, 0.5);"><center> <strong style="color:white;"> CITAS GENERAL - CONSULTORIO MÉDICO "SAN VICENTE"</strong></center>

<!-- /.Informacion-->



          </div>
          
        </div><!-- /.panel-->

        
        <div class="panel panel-default" >
        
          <div class="panel-body">
            <div class="col-md-15" >
  <!-- /.Informacion-->           
<br>


  <div class="hero-unit-table">  




      <!--BUTTON MODAL -->
<button style="color: white; background:grey; font-size: 14px;" type="button" class="btn " data-toggle="modal" data-target="#insertar">
Nueva Cita
</button>

<br><br>
<div >
        <div>
                    <div class="table-responsive"> 
 <table id="example" class="table table-striped table-bordered table-hover  text-dark" style="text-align: center; font-weight: bold;"   >
                              
 <thead>
 <tr style="background:rgba(0, 125, 255, 1);color:white; text-align: center; ">
                                 <th  scope="col">#</th>
    
      

      <th scope="col"  >Paciente</th>
       
       
         <th scope="col">Especialidad</th>
         <th scope="col">Especialista</th>
        <th scope="col">Fecha</th>

       <th scope="col">Hora</th>
   <th scope="col">Estado</th>
   <th scope="col">Observacion</th>
   
          <th scope="col">Editar</th>
           <th scope="col">Eliminar</th>

                                    </tr>
                                </thead>
<tbody>
   <!-- REGISTROS DE BD -->                                
   <?php
include_once("conexion.php");

$sentencia=$bd->query("SELECT * 
  FROM cita c
  JOIN paciente p
   ON c.paciente=p.nombre_apellido
     JOIN especialista e
  ON c.id_especialista =e.id_especialista

  JOIN especialidad d
  ON  e.id_especialidad=d.id_especialidad

ORDER BY c.id_cita

  ;");

$cita=$sentencia->fetchAll(PDO::FETCH_OBJ);


?>



<?php
foreach($cita as $row) {?>



            <tr >
              <td><?php echo $row->id_cita?></td>                                   

      <td><?php echo $row->nombre_apellido?></td>
 
     
         <td><?php echo $row->nombre_especialidad?></td>
         <td><?php echo $row->nombre_doctor?></td>
      <td><?php echo $row->fecha?></td> 
      <td><?php echo $row->hora?></td> 
              
<td><?php echo $row->estado?></td>
<td><?php echo $row->observacion?></td>



<td>  

 <button style="font-size: 14px;"  type="button" class="btn btn-info editbtn" data-toggle="modal" data-target="#editar">
                      <i class="fa fa-pencil" aria-hidden="true"></i>        Editar
                            </button></td>

<td><button style="font-size: 14px;" class="btn btn-danger deletebtn" data-toggle="modal" data-target="#eliminar">
                  <i class="fa fa-ban" aria-hidden="true"></i>           Eliminar
                            </button> 

                          </td>
                        
                        
                                    </tr>
           

  
<?php }?>

 </tbody>
 </table>


<!-- Modal Insertar -->
<div   class="modal fade" id="insertar" tabindex="-2"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div   class="modal-dialog" role="document">
    <div   class="modal-content">
      <div  class="modal-header">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true" style="font-size: 40px;">&times;</span>
        </button> 
           <div style=" background:rgba(0, 125, 255, 0.5);position: absolute;left: 4%; width: 90%; padding: 2%; color:white;letter-spacing: 12px;" class="alert "><strong> <h5 style="font-size:15px;  font-weight: bold; color:white; " 
            class="modal-title" id="exampleModalLabel"><center>AGREGAR NUEVA CITAS</center></h5></strong></div>
            <br> <br> 
      </div>
     





      <div class="modal-body">
       <!----- Formulario  ---->
<form style=" color: black; font-size: 15px;"   action="guardar_cita.php" method="POST" enctype="multipart/form-data">





<div  class="form-group">
     <?php
include_once("conexion.php");

$sentencia=$bd->query("SELECT * 
  FROM 
  paciente



  ;");
//FecthAll va devolver todas las filas de la base de dato (::)accede a elemtos estatico y costantes y metodos de una clase , fecth_obl devuelve la fila de cada columna 
$pa=$sentencia->fetchAll(PDO::FETCH_OBJ);

//print_r($var);

?>
<br>

            <label>Paciente</label>
            <select   style="margin:-40px 0px 0px 115px; width:75%; color: black; height: 40px; font-size: 13px;  " name="nombre"  class="form-control" required>
            <option    value="">Agregue paciente</option>
                <?php foreach($pa as $row): ?>
                    <option  value="<?php echo $row->nombre_apellido; ?>"><?php echo $row->nombre_apellido; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
<br>
<div class="form-group">

<label for="">Especialidad</label>
      <select style="margin:-40px 0px 0px 115px; width:75%;height: 40px;font-size: 13px;color: black; " name="nombrecapa" id="nombrecapa" class="form-control" required>
  <option value="">Seleccione la especialidad de cita</option>
</select>



 </div>
 <br>
 <div class="form-group">
<label for="">Especialista</label>
        <select  style="margin:-40px 0px 0px 115px; width:75%; color: black; height: 40px; font-size: 13px;  " name="curso" id="curso" class="form-control" required>

</select>
        
 </div>


<br>

<div class="form-group">
<label for="">Fecha</label>
<input  style="margin:-40px 0px 0px 115px; width:75%;color: black; height: 40px; font-size: 13px; " min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>" class="form-control" type="date" name="fecha" class="form-control" required>

 </div>
<br>
<?php
date_default_timezone_set('America/Guayaquil');
?>
<div class="form-group">
<label for="">Hora</label>
  <input  style="margin:-40px 0px 0px 115px; width:75%; color: black; height: 40px; font-size: 13px;" class="form-control" type="time" name="hora" value="00:00"  min="11:00"   max="17:59" step="60" required>
 </div>




<br>
<div class="form-group">
<label  for="">Estado</label>

  <select style="margin:-40px 0px 0px 115px; width:75%; color: black; height: 40px; font-size: 13px;" name="estado" class="form-control" required>
 <option  value="Asignado">Asignado</option>
 </select>
 
 </div>
 
 <br>
<div class="form-group">
 <label>Observacion:</label>
                        <textarea  style="margin:-40px 0px 0px 115px; width:75%;color: black; height: 40px; font-size: 13px; "placeholder="Observacion:" name="observacion"  class="form-control"></textarea>
</div>

  
 
  <div class="modal-footer">       
        <button style="color: white; font-weight: bold; height: 40px; font-size: 14px; " type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button 

style=" height: 40px; font-size: 14px;"


         type="submit" class="btn btn-warning "><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar</button>
      </div>

</form>  <!----- Formulario  ---->
</div>  <!----- Div form-group  ---->

    </div>
  </div>
</div>


<!-- /.Termina modal Insertar-->



<!-- Modal Editar -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div  class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true" style="font-size: 40px;">&times;</span>
        </button> 
           <div style="background:rgba(0, 125, 255, 0.5);color:white;letter-spacing: 10px;position: absolute;left: 4%; width: 90%; padding: 2%;" class="alert "><strong> <h5 style="font-size:15px;  font-weight: bold; color:white" class="modal-title" id="exampleModalLabel"><center>EDITAR CITAS</center></h5></strong></div>
             <br><br>     
      </div>
     



      <div class="modal-body">
       <!----- Formulario  ---->
<form style=" color: black; font-size: 15px;" action="editar_cita.php" method="POST" >


<input type="hidden" name="id" id="update_id">



 

<br>
<div class="form-group">
<label for="">PACIENTE</label>
<input  style="margin:-40px 0px 0px 115px; width:75%; color: black; height: 40px; font-size: 13px; " type="text" name="nombre" id="nombre" class="form-control" placeholder="Editar Nombre Paciente" required readonly >




<br>
 </div>

<div class="form-group">
<label for="">Especialidad </label>
      <select style="margin:-40px 0px 0px 115px; width:75%; color: black; height: 40px; font-size: 13px; " name="nombrecapa" id="nombrecapae" class="form-control">

</select>


<br>
 </div>
 <div class="form-group">
<label  for="">Especialista</label>
        <select style="margin:-40px 0px 0px 115px; width:75%; color: black; height: 40px; font-size: 13px; " name="cursoe" id="cursoe" class="form-control">

</select>
        
 </div>

<br>
<div class="form-group">
<label for="">FECHA</label>
<input style="margin:-40px 0px 0px 115px; width:75%; color: black; height: 40px; font-size: 13px; " class="form-control" type="date" name="fecha" id="fecha" class="form-control">

 </div>

<br>
<div class="form-group">
<label for="">Hora </label>
  <input style="margin:-40px 0px 0px 115px; width:75%; color: black; height: 40px; font-size: 13px; "  class="form-control" type="time" name="hora" id="hora" value="11:45" max="20:30" min="08:00" step="60" required>
 </div>
<br>
<div class="form-group">
<label for="">ESTADO</label>

  <select style="margin:-40px 0px 0px 115px; width:75%;  color: black; height: 40px; font-size: 13px;" name="estado" id="estado" class="form-control" >
 <option  value="Asignado">Asignado</option>
<option  value="Atendido">Atendido</option>
<option  value="cancelada">Cancelada</option>

 </select>
 
 </div>
<br>

<div class="form-group">
 <label>Observacion</label>
                        <textarea style="margin:-40px 0px 0px 115px; width:75%;  color: black; height: 40px; font-size: 13px;"placeholder="Observacion:" name="observacion" id="observacion" class="form-control"></textarea>
</div>


  <div class="modal-footer">      
        <button style="color: white; font-weight: bold; font-size: 15px;" type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>Cerrar</button>
   
   <button style="color: black; background:rgba(0, 125, 255, 0.5);  font-size: 15px;" type="submit"  class="btn "><i class="fa fa-refresh" aria-hidden="true"></i> Actualizar</button>

      </div>

</form>
 </div>
</div>

    
    </div>
  </div>
</div>


<!-- /.Termina modal editar-->







<!-- Modal Eliminar -->
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div  class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true" style="font-size: 40px;">&times;</span>
        </button> 
           <div style="background:rgba(0, 125, 255, 0.5);color:white;letter-spacing: 10px;position: absolute;left: 4%; width: 90%; padding: 2%;" class="alert "><strong> <h5 style="font-size:15px;  font-weight: bold; color:white" class="modal-title" 
id="exampleModalLabel"><center>ELIMINAR CITA</center></h5></strong></div>
       
        <br>
        
        <br>   
        
        <br>
            
      </div>
     

      <div class="modal-body">
       <!----- Formulario  ---->
<form action="eliminar_cita.php" method="POST" >

<input type="hidden" name="id" id="delete_id" >


<center>
<p style="font-size: 22px;"   >Estas Seguro de Eliminar  <strong>  </strong> ?</p>

</center>
       <br>     
  <div class="modal-footer">       <br>
        <button style="color: white; font-weight: bold; font-size: 14px;width: 70px; " type="button" class="btn btn-danger" data-dismiss="modal">No</button>
   
   <button type="submit" style="color: black; background:rgba(0, 125, 255, 0.5); width: 70px; font-size: 14px; " class="btn ">Si</button>

      </div>

</form>

</div>

    
    </div>
  </div>
</div>


<!-- /.Termina modal ELIMINAR-->






 </div>












<center>
  <div  class="col-sm-12">
        <p style="color: black;" class="back-link">Consultorio Medico " San Vicente "   </p>
      </div>
</center>
            </div>
          </div>
        </div><!-- /.panel-->
      </div><!-- /.col-->
      <br>
  <div>
      <!--<div class="col-sm-12"><br>
        <p class="back-link">Fundación Conexión Vital   <a href="index.php">Andrea Hernandez Gerente</a></p>
      </div>
-->
    

</div>
    </div><!-- /.row -->
  </div><!--/.main-->
  
                       <div class="col-sm-12">
                

                        <div class="row">
                            <div class="col-md-12">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
<script src="js/js/jquery-1.11.1.min.js"></script>
  <script src="js/js/bootstrap.min.js"></script>
  <script src="js/js/chart.min.js"></script>
  <script src="js/js/chart-data.js"></script>
  <script src="js/js/easypiechart.js"></script>
  <script src="js/js/easypiechart-data.js"></script>
  <script src="js/js/bootstrap-datepicker.js"></script>
  <script src="js/js/custom.js"></script>
  
<!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>   
<script type="text/javascript" src="js/js/main.js"></script>  
<script>
  
$('.editbtn').on('click',function () {

$tr=$(this).closest('tr');

var datos=$tr.children("td").map(function () {

return $(this).text();

});

$('#update_id').val(datos[0]);

$('#nombre').val(datos[1]);

$('#nombrecapae').val(datos[2]);


$('#cursoe').val(datos[3]);

$('#fecha').val(datos[4]);

$('#hora').val(datos[5]);
$('#').val(datos[6]);

$('#observacion').val(datos[7]);


});



</script>




<script>
  
$('.deletebtn').on('click',function () {

$tr=$(this).closest('tr');

var datos=$tr.children("td").map(function () {

return $(this).text();

});

$('#delete_id').val(datos[0]);


});







</script>




</body>

</html>
<!-- end document-->
