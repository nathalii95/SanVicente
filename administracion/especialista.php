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

          <div class="alert " style="font-size: 15px; background:rgba(0, 125, 255, 0.5);"><center> <strong style="color:white;"> ESPECIALISTA - CONSULTORIO MEDICO "SAN VICENTE"</strong></center>

<!-- /.Informacion-->



          </div>
          
        </div><!-- /.panel-->

        
        <div class="panel panel-default" >
        
          <div class="panel-body">
            <div class="col-md-15" >
  <!-- /.Informacion-->           
<br>
  <!-- /.Informacion-->           



  <div class="hero-unit-table">  

<!--BUTTON MODAL -->
<button style="color: white; background:grey; font-size: 14px;"  type="button" class="btn " data-toggle="modal" data-target="#insertar">
Nuevo Especialista
</button>
<br><br>
<div >
        <div >
                <div >
                    <div class="table-responsive">     
 <table id="example" class="table table-striped table-bordered table-hover  text-dark" style="text-align: center; font-weight: bold;" >
                              
 <thead>
 <tr style="background:rgba(0, 125, 255, 1);color:white; ">
                                 <th scope="col">#</th>
    
      <th scope="col">Cedula</th>
      <th scope="col">Nombre Especialista</th>
       
       <th scope="col">Telefono</th>
        <th scope="col">Direccion</th>
       <th scope="col">Correo</th>
   <th scope="col">Fecha Nacimiento</th>
   <th scope="col">Genero</th>
   <th scope="col">Especialidad del Especialidad</th>
          <th scope="col">Fecha Creación</th>
          <th scope="col">Editar</th>
           <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
<tbody>
   <!-- REGISTROS DE BD -->                                
   <?php
include_once("conexion.php");

$sentencia=$bd->query("SELECT *  
  FROM especialista a
  JOIN especialidad d
  ON a.id_especialidad =d.id_especialidad
ORDER BY a.id_especialista

  ;");
//FecthAll va devolver todas las filas de la base de dato (::)accede a elemtos estatico y costantes y metodos de una clase , fecth_obl devuelve la fila de cada columna 
$paciente=$sentencia->fetchAll(PDO::FETCH_OBJ);

//print_r($var);

?>


<?php
foreach($paciente as $row) {?>



            <tr >
              <td><?php echo $row->id_especialista?></td>                                   
      <td><?php echo $row->cedula_esp?></td>
      <td><?php echo $row->nombre_doctor?></td>
    
      <td><?php echo $row->telefono?></td> 
      <td><?php echo $row->direccion?></td> 
      <td><?php echo $row->email?></td> 
              
<td><?php echo $row->fecha_nacimiento?></td>
<td><?php echo $row->genero?></td>
    <td><?php echo $row->nombre_especialidad?></td>
<td><?php echo $row->fecha_creacion?></td>
<td>  

 <button style="font-size: 14px;" type="button"  class="btn btn-info editbtn"  data-toggle="modal" data-target="#editar">
                     <i class="fa fa-pencil" aria-hidden="true"></i>              Editar
                            </button></td>

<td><button style="font-size: 14px;" class="btn btn-danger deletebtn " data-toggle="modal" data-target="#eliminar">
                               <i class="fa fa-ban" aria-hidden="true"></i>     Eliminar
                            </button> </td>
                                    </tr>
           

  
<?php }?>

 </tbody>
 </table>              </div>
                </div>
        </div>  
    </div>    
      


<!-- Modal Insertar -->
<div class="modal fade" id="insertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div  class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true" style="font-size: 40px;">&times;</span>
        </button> 
           <div style=" background:rgba(0, 125, 255, 0.5);color:white;letter-spacing: 12px; position: absolute;left: 4%; width: 90%;" class="alert "><strong> <h5 style="font-size:15px;  font-weight: bold; color:white" class="modal-title" id="exampleModalLabel"><center>AGREGAR ESPECIALISTA</center></h5></strong></div>
       
           
      </div>
     





      <div class="modal-body">
       <!----- Formulario  ---->
<form style=" color: black; font-size: 15px;"  action="guardar_especialista.php" method="POST" enctype="multipart/form-data">

<div class="form-group">
<br>
<label for="">Cedula</label>
<input style="margin:-40px 0px 0px 115px; width:75%;color: black; height: 40px; font-size: 13px; " type="text" name="cedula" class="form-control" placeholder="Ingresar Cedula Especialista"  minlength="10" maxlength="10" onKeyPress="return SoloNumeros(event);" requiered>

 </div>
<br>
<div class="form-group">
<label for="">Especialista</label>
<input style="margin:-40px 0px 0px 115px; width:75%;color: black; height: 40px; font-size: 13px; " type="text" name="nombre" class="form-control"  placeholder="Ingresar Nombre Especialista"  minlength="10" maxlength="60" onkeypress="return soloLetras(event);" required>

 </div>

    <br>

<div class="form-group">
<label for="">Telefono</label>
<input style="margin:-40px 0px 0px 115px; width:75%;color: black; height: 40px; font-size: 13px; " type="text" name="telefono" class="form-control" placeholder="Ingrese Telefono" minlength="10" maxlength="10" onKeyPress="return SoloNumeros(event);" required>

 </div>

<br>
<div class="form-group">
<label for="">Direccion</label>
<input style="margin:-40px 0px 0px 115px; width:75%;color: black; height: 40px; font-size: 13px; " type="text" name="direccion" class="form-control"  placeholder="Ingrese Dirección" required >

 </div>
<br>

<div class="form-group">
<label for="">Correo</label>
<input style="margin:-40px 0px 0px 115px; width:75%;color: black; height: 40px; font-size: 13px;" type="email" name="email" class="form-control"  placeholder="ejemplo@ejemplo.com" required>

 </div>
<br>
<div class="form-group">
<label for="">Fecha Nacimi</label>
<input  style="margin:-40px 0px 0px 115px; width:75%; color: black; height: 40px; font-size: 13px;" type="date" name="fecha" class="form-control" required>

 </div>
<br>
<div class="form-group">
<label for="">Genero</label>

  <select style="margin:-40px 0px 0px 115px; width:75%;color: black; height: 40px; font-size: 13px; " name="genero" class="form-control" required>
 <option  value="Masculino">Masculino</option>
<option  value="Femenino">Femenino</option>
 </select>
 
 </div>
<br>
<div class="form-group">
     <?php
include_once("conexion.php");

$sentencia=$bd->query("SELECT * 
  FROM 
  especialidad 



  ;");
//FecthAll va devolver todas las filas de la base de dato (::)accede a elemtos estatico y costantes y metodos de una clase , fecth_obl devuelve la fila de cada columna 
$pa=$sentencia->fetchAll(PDO::FETCH_OBJ);

//print_r($var);

?>
 
            <label>Especailidad</label>
            <select style="margin:-40px 0px 0px 115px; width:75%;color: black; height: 40px; font-size: 13px; " name="especialidad" class="form-control">
                <option  value="" >Seleccione Especialidad</option>
                <?php foreach($pa as $row): ?>
                    <option value="<?php echo $row->id_especialidad; ?>"><?php echo $row->nombre_especialidad; ?></option>
                <?php endforeach; ?>
            </select>
        </div>   
 </div>

       
  <div class="modal-footer">       
       
        <button 

style="color: black; height: 40px; font-size: 14px;font-weight:bold; "


         type="submit" class="btn btn-warning" ><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar</button>
      </div>

</form>

</div>

    
    </div>
  </div>
</div>


<!-- /.Termina modal Insertar-->



<!-- Modal Editar -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true" style="font-size: 40px;">&times;</span>
        </button> 
           <div style="background: rgba(0, 125, 255, 0.5);color:white;letter-spacing: 10px;position: absolute;left: 4%; width: 90%; " class="alert "><strong> <h5 style="font-size:15px;  font-weight: bold; color:white" class="modal-title" id="exampleModalLabel"><center>EDITAR ESPECIALISTA</center></h5></strong></div>
       
           
      </div>
     



      <div class="modal-body">
       <!----- Formulario  ---->
<form style=" color: black; font-size: 15px;" action="editar_especialista.php" method="POST" >


<input type="hidden" name="id" id="update_id">

<br>
<div class="form-group">
<label for="">CEDULA</label>
<input  style="margin:-40px 0px 0px 115px; width:75%; color: black; height: 40px; font-size: 13px; " type="text" name="cedula" id="cedula" class="form-control" placeholder="Editar Cedula Especialista"  minlength="10" maxlength="10" onKeyPress="return SoloNumeros(event);" required>

 </div>
<br>
<div class="form-group">
<label for="">ESPECILISTA</label>
<input  style="margin:-40px 0px 0px 115px; width:75%; color: black; height: 40px; font-size: 13px; " type="text" name="nombre" id="nombre" class="form-control" placeholder="Editar Nombre Especialista"  inlength="10" maxlength="60" onkeypress="return soloLetras(event);" required>

 </div>
<br>
<div class="form-group">
<label for="">TELEFONO</label>
<input  style="margin:-40px 0px 0px 115px; width:75%; color: black; height: 40px; font-size: 13px; " type="text" name="telefono" id="telefono" class="form-control " placeholder="Editar Telefono" required>

 </div>

<br>
<div class="form-group">
<label for="">DIRECCION</label>
<input  style="margin:-40px 0px 0px 115px; width:75%;color: black; height: 40px; font-size: 13px;  " type="text" name="direccion" id="direccion"  class="form-control" placeholder="Editar Direcion" required>

 </div>
<br>
<div class="form-group">
<label for="">CORREO</label>
<input   style="margin:-40px 0px 0px 115px; width:75%; color: black; height: 40px; font-size: 13px; " type="email" name="email" id="email" class="form-control" placeholder="Edite el Correo ejemplo@ejemplo.com" required>

 </div>
<br>
<div class="form-group">
<label for="">FECHA NACIMI</label>
<input  style="margin:-40px 0px 0px 115px; width:75%; color: black; height: 40px; font-size: 13px; " type="date" name="fecha" id="fecha" class="form-control"  required>

 </div>
<br>
<div class="form-group">
<label for=""> GENERO</label>

  <select  style="margin:-40px 0px 0px 115px; width:75%;color: black; height: 40px; font-size: 13px;  " name="genero" id="genero" class="form-control"  required>
 <option  value="Masculino">Masculino</option>
<option  value="Femenino">Femenino</option>
 </select>
 
 </div>


<br>
<div class="form-group">
     <?php
include_once("conexion.php");

$sentencia=$bd->query("SELECT * 
  FROM 
  especialidad 



  ;");
//FecthAll va devolver todas las filas de la base de dato (::)accede a elemtos estatico y costantes y metodos de una clase , fecth_obl devuelve la fila de cada columna 
$pa=$sentencia->fetchAll(PDO::FETCH_OBJ);

//print_r($var);

?>
            <label>Cambie la Especailidad</label>
            <select style="color: black; height: 40px; font-size: 13px;  " name="especialidad" id="especialidad" class="form-control">
          
                <?php foreach($pa as $row): ?>
                    <option value="<?php echo $row->id_especialidad; ?>"><?php echo $row->nombre_especialidad; ?></option>
                <?php endforeach; ?>
            </select>
        </div>


 </div>


  <div class="modal-footer">      
        <button style="color: white; font-weight: bold; font-size: 15px;" type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Cerrar</button>
   
   <button style="color: black; background:rgba(0, 125, 255, 0.5);font-size: 15px; " type="submit"  class="btn "> <i class="fa fa-refresh" aria-hidden="true"></i> Actualizar</button>

      </div>

</form>

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
           <div style="background:rgba(0, 125, 255, 0.5);color:white;letter-spacing: 10px;position: absolute;left: 4%; width: 90%;" class="alert "><strong> <h5 style="font-size:15px;  font-weight: bold; color:white" class="modal-title" id="exampleModalLabel"><center>ELIMINAR ESPECIALISTA</center></h5></strong></div>
       
        <br>
        
        <br>
            
      </div>
     

      <div class="modal-body">
       <!----- Formulario  ---->
<form action="eliminar_especialista.php" method="POST" >

<input type="hidden" name="id" id="delete_id" >


<center>
<p style="font-size: 22px;"   >Estas Seguro de Eliminar </strong> ?</p>

</center>
       <br>     
  <div class="modal-footer">       <br>
        <button style="color: white; font-weight: bold; font-size: 14px;width: 70px;" type="button" class="btn btn-danger" data-dismiss="modal">No</button>
   
   <button type="submit" style="color: black; background:rgba(0, 125, 255, 0.5);font-size: 14px;width: 70px; " class="btn ">Si</button>

      </div>

</form>

</div>

    
    </div>
  </div>
</div>


<!-- /.Termina modal modificar-->





<center>
 <div style="background-color: rgb(255,255,255,0.6); "   class="col-sm-12">
        <p style="color: black;" class="back-link">Consultorio Medico " San Vicente "   <a href="index.php"></a></p>
      </div>
    


 </div>


</center>

            </div>
          </div>
        </div><!-- /.panel-->
      </div><!-- /.col-->
      

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

$('#cedula').val(datos[1]);

$('#nombre').val(datos[2]);


$('#telefono').val(datos[3]);

$('#direccion').val(datos[4]);

$('#email').val(datos[5]);

$('#fecha').val(datos[6]);

$('#genero').val(datos[7]);

$('#especialidad').val(datos[8]);

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




<script >
  

//Se utiliza para que el campo de texto solo acepte numeros
function SoloNumeros(evt){
 if(window.event){//asignamos el valor de la tecla a keynum
  keynum = evt.keyCode; //IE
 }
 else{
  keynum = evt.which; //FF
 } 
 //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
 if((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 ){

  return true;
 }
 else{ 
  alert('Tecla de texto no aceptada');
  return false;
 }
}









</script>

<script >//Se utiliza para que el campo de texto solo acepte letras
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){
alert('Tecla numerica no aceptada');
        return false;
      }
}</script>



</body>

</html>
<!-- end document-->
