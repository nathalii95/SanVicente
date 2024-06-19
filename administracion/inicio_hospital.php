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

          <div class="alert "  style="font-size: 15px; background:rgba(0, 125, 255, 0.5);"><center> <strong style="color:white;"> HISTORIAL PACIENTE - CONSULTORIO MEDICO "SAN VICENTE"</strong></center>

<!-- /.Informacion-->



          </div>
          
        </div><!-- /.panel-->

        
        <div class="panel panel-default"  style="background-color: rgb(255,255,255,0.7);"  >
        
          <div class="panel-body">
            <div class="col-md-15"  >
        

<center> 


 <?php
include_once("conexion.php");

$sentencia=$bd->query("SELECT * FROM
paciente

WHERE id_paciente

  ;");
//FecthAll va devolver todas las filas de la base de dato (::)accede a elemtos estatico y costantes y metodos de una clase , fecth_obl devuelve la fila de cada columna 
$paciente=$sentencia->fetchAll(PDO::FETCH_OBJ);

//print_r($var);

?>

<div >

<br>
  <div  class="row" style="float: left; display: inline-block;  
 "><?php
foreach($paciente as $row) {?>
    <div  class="" style="display: inline-block;  

  margin: 0.2em ;">
      <div style=" background:rgba(136, 109, 255, 0.1);  " class="card" style="font-size: 14px ;display: inline-block; ">
        <div class="card-content">
          <i class="material-icons large"></i>
          <h6 style="color:red;font-weight: bold;">NOMBRE DEL PACIENTE</h6>
            <p style="color:rgba(0, 125, 255,1);font-weight: bold;" ><?php echo $row->nombre_apellido?></p>
                <p  class="" ><h7 style="color: red;font-weight: bold;" >Cedula:</h7><?php echo $row->cedula?></p>
                        <p class="mb-0"><h7 style="color: red;font-weight: bold;">Correo:</h7><br><?php echo $row->correo?></p>
<p class="mb-0"><h7 style="color:red;font-weight: bold;">Fecha Nacimiento:</h7><?php echo $row->fecha_nacimiento?></p>
        <p class="mb-0"><h7 style="color:red;font-weight: bold;">Sexo:</h7><?php echo $row->sexo?></p>



        </div>

         
        <div class="card-action" >


     <a style="background:rgba(0, 125, 255,1);color:white;font-size:18px;" href="ver_historial2.php?id=<?php echo $row->id_paciente?>" class="btn "  >Ver Historial</a>


          <a style="background:rgba(0, 125, 255,1);color:white;font-size:18px;" href="inicio_historial.php?id=<?php echo $row->id_paciente?>" class="btn "  >Agregar Historial</a>
        </div>
      </div>
    </div>   
<?php }?>
 
  </div>
</div>



      
</center>


  <!-- /.Informacion-->           
<center>
  <div  class="col-sm-12">
        <p style="color: black;" class="back-link">Consultorio Medico " San Vicente "   </p>
      </div>
            </div>
          </div>
        </div><!-- /.panel-->
      </div><!-- /.col-->
      
</center>


    

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

$('#usuario').val(datos[1]);

$('#pass').val(datos[2]);

$('#nombre').val(datos[3]);


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
