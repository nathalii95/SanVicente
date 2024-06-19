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

<link href="../css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="../css/jquery/dist/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../fonts1/style.css">
  <link rel="stylesheet" href="../css
/nav_inici.css">



  
  <link href="../css/styles.css" rel="stylesheet">
    
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
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

include ('../nav.php');


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

include ('../slide.php');


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

          <div class="alert "  style="font-size: 15px; background:rgba(0, 125, 255, 0.5);"><center> <strong style="color:white;">VER CITAS CANCELADA- CONSULTORIO MEDICO "SAN VICENTE"</strong></center>

<!-- /.Informacion-->



          </div>
          
        </div><!-- /.panel-->

        
        <div class="panel panel-default" >
        
          <div class="panel-body">
            <div class="col-md-15" >
  <!-- /.Informacion-->           
<br>


<div class="table-responsive"> 
 <table id="example" class="table table-striped table-bordered table-hover  text-dark" style="text-align: center; font-weight: bold;"   >
                  
            <div id="datatable_length">
              <!-- RANGO DE FECHAS A BUSCAR Y EXPORTAR -->
              <label style="font-weight: normal;">Desde: <input value="<?php echo date("Y-m-d");?>" class="form-control" type="date" id="bd-desde"/></label>
              <label style="font-weight: normal;">Hasta: <input value="<?php echo date("Y-m-d");?>" class="form-control" type="date" id="bd-hasta"/></label>
              <button style="" id="rango_fecha" class="btn-sm btn-primary">Buscar</button>
              <!-- BOTON PARA EXPORTAR EL RANGO DE FECHAS -->
                          </div>
          </div>
          
        </div>
        <div class="row">
          <thead>
          <tr>
            <th width="10">#</th>
            <th width="30">Paciente</th>
            <th width="30">Especialidad</th>
            <th width="30">Especialista</th>
            <th width="30">Fecha</th>
            <th width="30">Hora</th>
             <th width="30">Citas Ocupadas</th>

        
          </tr>
          </thead>
          <!-- CONTENEDOR DONDE SE IMPRIMEN LA CONSULTA POR FECHAS -->
          <tbody id="actualizar">
            <?php include('../includes/imprimir_bitacoracancelada.php'); ?>
          </tbody>
        </div>
      </table>
    </div>
  </div>

  
<script type="text/javascript">
(function(){  
  $('#rango_fecha').on('click',function(){
    var desde = $('#bd-desde').val();
    var hasta = $('#bd-hasta').val();
    var url = '../dao/busca_por_fechacancelada.php';
    $.ajax({
    type:'POST',
    url:url,
    data:'desde='+desde+'&hasta='+hasta,
    success: function(datos){
      $('#actualizar').html(datos);
    }
  });
  return false;
  });
})();
  


</script>









            </div>
          </div>
        </div><!-- /.panel-->
      </div><!-- /.col-->
      <br>
  <div>
    
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
<script src="../css/bootstrap/dist/js/bootstrap.min.js"></script>


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
