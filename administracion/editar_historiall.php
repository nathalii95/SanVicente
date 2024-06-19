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

          <div class="alert " style="font-size: 15px; letter-spacing: 5px; color:white;background: rgba(0, 125, 255, 0.5);"><center> <strong> EDITAR HISTORIAL</strong></center>

<!-- /.Informacion-->



          </div>
          
        </div><!-- /.panel-->

        
        <div class="panel panel-default" >
        
          <div class="panel-body">
            <div class="col-md-15" >
  <!-- /.Informacion-->           



<div >
        <div>
               
 
 <?php
include_once("conexion.php");
  
$id=$_GET['id'];


$sentencia=$bd->query("SELECT * 
  FROM historial h
  JOIN paciente p
   ON h.id_paciente=p.id_paciente
  
WHERE h.id_historial='$id'

  ;");
//FecthAll va devolver todas las filas de la base de dato (::)accede a elemtos estatico y costantes y metodos de una clase , fecth_obl devuelve la fila de cada columna 
$paciente=$sentencia->fetchAll(PDO::FETCH_OBJ);


?>

    <br><br>
<form  action="editar_historial.php" method="POST" >
 <?php foreach($paciente as $row): ?>


<input type="hidden" name="id" value="<?php echo $id; ?>">
<div class="form-group">

<label  >PACIENTE</label>
 <select style="color: black; height: 40px; font-size: 13px;" name="nombre"  class="form-control" readonly >  

  <option value="<?php echo $row->id_paciente; ?> " >
                             <?php echo $row->nombre_apellido; ?></option>
     </select>
 </div>

<div class="form-group">
<label for="">CEDULA</label>
<input  style="color: black; height: 40px; font-size: 13px;" class="form-control" type="text" name="cedula" class="form-control"  required value="<?php echo $row->cedula; ?>">
 </div>
 <div class="form-group">
<label for="">FECHA NACIEMIENTO</label>
<input style="color: black; height: 40px; font-size: 13px;" class="form-control" type="date" name="fecha" class="form-control"  required value="<?php echo $row->fecha_nacimiento; ?>">
 </div>
 <div class="form-group">
<label for=""> GENERO</label>

  <select style="color: black; height: 40px; font-size: 13px;" name="genero" id="genero" class="form-control" required >
 <option  value="<?php echo $row->genero; ?> " >
                             <?php echo $row->genero ; ?></option>
 </select>
 </div>
 <div class="form-group">
<label for="">CORREO</label>
<input style="color: black; height: 40px; font-size: 13px;"  class="form-control" type="email" name="correo" class="form-control"  required value="<?php echo $row->correo; ?>">
 </div>

<div class="form-group">
<label for="">EDAD</label>
<input style="color: black; height: 40px; font-size: 13px;" class="form-control" type="text" name="edad" class="form-control"  required value="<?php echo $row->edad; ?>">
 </div>

<div class="form-group">
<label for="">PAIS</label>
<input style="color: black; height: 40px; font-size: 13px;" class="form-control" type="text" name="pais" class="form-control"  required value="<?php echo $row->pais; ?>">
 </div>

 <div class="form-group">
<label for="">PROVINCIA</label>
<input style="color: black; height: 40px; font-size: 13px;" class="form-control" type="text" name="provincia" class="form-control"  required value="<?php echo $row->provincia; ?>">
 </div>

 <div class="form-group">
<label for="">CIUDAD</label>
<input style="color: black; height: 40px; font-size: 13px;"  class="form-control" type="text" name="ciudad" class="form-control"  required value="<?php echo $row->ciudad; ?>">
 </div>
 
 <div class="form-group">
<label for="">DIRECCION</label>
<input style="color: black; height: 40px; font-size: 13px;" class="form-control" type="text" name="direccion" class="form-control"  required value="<?php echo $row->direccion; ?>">
 </div>
 

 <div class="form-group">
<label for="">TELEFONO</label>
<input style="color: black; height: 40px; font-size: 13px;"  class="form-control" type="text" name="telefono" class="form-control"  required value="<?php echo $row->telefono; ?>">
 </div>
<label for=""> CIVIL</label>

  <select style="color: black; height: 40px; font-size: 13px;" name="civil" id="civil" class="form-control" required >
 <option  value="<?php echo $row->civil; ?> " >
                             <?php echo $row->civil ; ?></option>
 </select>
 </div>

 <div class="form-group">
<label for="">OBSERVACION</label>
<input style="color: black; height: 40px; font-size: 13px;"  class="form-control" type="text" name="mot" class="form-control"  required value="<?php echo $row->mot; ?>">
 </div>

 <div class="form-group">
<label for="">RECOMENDACION</label>
<input style="color: black; height: 40px; font-size: 13px;" class="form-control" type="text" name="recom" class="form-control"  required value="<?php echo $row->recom; ?>">
 </div>
 <br>
   <?php endforeach; ?>


   <button style="color: white; background:rgba(0, 125, 255, 1);font-size: 15px; " type="submit"  class="btn ">Actualizar Cita</button>

</form>


            </div>
                </div>
        </div>  
    </div>    











 </div>

<center>

  <div  class="col-sm-12">
        <p style="color: black;" class="back-link">Consultorio Medico " San Vicente "   <a href="index.php"></a></p>
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

$('#codpaciente').val(datos[1]);

$('#cedula').val(datos[2]);

$('#nombre').val(datos[3]);

$('#fecha').val(datos[4]);

$('#genero').val(datos[5]);

$('#email').val(datos[6]);

$('#edad').val(datos[7]);

$('#pais').val(datos[8]);

$('#provincia').val(datos[9]);

$('#ciudad').val(datos[10]);

$('#direccion').val(datos[11]);

$('#telefono').val(datos[12]);

$('#civil').val(datos[13]);

$('#observacion').val(datos[14]);

$('#recomendacion').val(datos[15]);







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
