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

include ('slide.php');


?>

                            </div>
                        </div>
                    </div>
                </div>

            </header>
            <br><br>
            <!-- HEADER DESKTOP-->
 <div class=" col-sm-offset- col-lg-12 " >

   <div class="row">
      <div class="col-lg-12">
       <div style="width: 94%; margin-left: 20px; position:relative;top: 40px;" >

          <div class="alert "  style="font-size: 15px; background:rgba(0, 125, 255, 0.5);"><center> <strong style="color:white;"> CONSULTORIO MEDICO "SAN VICENTE"</strong></center>

<!-- /.Informacion-->



          </div>
          
        </div><!-- /.panel-->
<br>      
        
        <div class="panel panel-default" >
        
          <div class="panel-body">
            <div class="col-md-15" >
      <div class="col-md-12">
        <div class="panel panel-default ">

        <center> <h4 style="font-weight: bold; letter-spacing: 20px; font-size: 28px;">FUNCIONES DEL SISTEMA</h4></center>
  <div class="panel-heading" >
            
            <span class="pull-right clickable panel-toggle panel-button-tab-left"></span></div>
          <div style="width: 50%;" class="panel-body timeline-container">
            <br>
                        <img src="iconos/reservar.png" width="25%;"  style="position: relative; left: 35%;  width: 28%;">

            <ul style=" list-style: none;" class="timeline">
              <li>
                <center>
                <div   style=" background:rgba(0, 125, 255, 1); border-radius: 20px; "  class="timeline-badge"><i style="font-size: 30px; color: white;" class="fa fa-pencil-square-o" aria-hidden="true">                    <h4 class="timeline-title" style=" color: white;">Gestion de Citas</h4>
</i></div></center>
                <div  class="timeline-panel">
                  <div   class="timeline-heading">
                  </div>
                
                </div>
              </li>
              <br><br>
              <li>
                <center>
                <div style="background: #222222;border-radius: 20px; color: white;" class="timeline-badge">
<em style="font-size: 30px; " class="fa fa-clone">&nbsp;</em><h4 style="color: white;" class="timeline-title">Reportes</h4></div></center>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                  </div>
                  
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div><!--/.col-->


    </div><!--/.row-->
  </div>  <!--/.main-->




            <!-- MAIN CONTENT--><br><br>

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



</script>




</body>

</html>
<!-- end document-->
