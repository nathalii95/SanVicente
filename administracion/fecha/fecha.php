<?php  
    session_start();
    if (!isset($_SESSION['nombre'])) {
        header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
        <link href="../css/font-awesome.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Title Page-->
    <title>Consultorio Medico "San Vicente"</title>    
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link rel="icon" href="../images/consultorio.png" type="image" >
            <link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css">
            <link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css">
            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <!-- Fontfaces CSS-->
            <link href="../css/font-face.css" rel="stylesheet" media="all">
            <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
            <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
            <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
            <!-- Bootstrap CSS-->
            <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
            <!-- Vendor CSS-->
            <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
            <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" med="all">
            <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
            <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
            <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
            <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
            <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
            <link href="../css/font-awesome.min.css" rel="stylesheet">
            <link href="../css/theme.css" rel="stylesheet" media="all">
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
<div  class="row">
<div   class="col-lg-12">
<div style="width: 94%; margin-left: 20px; position:relative;top: 40px;" >
<div class="alert " 
 style="font-size: 15px; background:rgba(0, 125, 255, 0.5);"><center> <strong style="color:white;">REPORTE Y BUSQUEDA POR FECHA - CONSULTORIO MEDICO "SAN VICENTE"</strong></center>
<!-- /.Informacion-->
          </div>
        </div><!-- /.panel-->
                <div  class="panel panel-default" >
                    <div class="panel-body">
    <!-- /.Informacion-->                       
<br>
<!--FECHAAAAAAA FORM  ajax-->
    <div class = "row-fluid">
        <div class = "col-md-3"></div>
        <div class = "">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class = "form-inline">
                <form method="post" class="form" action="pdf_fecha.php" target="_blank">
                <label>Desde:</label>
                <input type = "text" class = "form-control" placeholder = "dd/mm/aaaa"  id = "date1" name="date1">
                <label>Hasta</label>
                <input type = "text" class = "form-control" placeholder = "dd/mm/aaaa"  id = "date2" name="date2">
                <button type = "button" class = "btn btn-success" id = "btn_search" onclick="load();"><span class = "fa fa-search"></span></button>
                 <button type = "button" id = "reset" class = "btn btn-warning"><span class = "fa fa-undo"><span></button>
 <button type="submit" class="btn btn-danger" style="color: white; font-weight: bold;" ><i class="fa fa-file-pdf-o" aria-hidden="true" style="font-size:25px;"></i></button>   
    </form> 
            </div>
            <br ><br >
<div >
        <div>
            <div class = "table-responsive">    
                <table  class="table table-striped table-bordered table-hover text-dark"  style="text-align: center; font-weight: bold;">
                    <thead>
                        <tr style="background:rgba(0, 125, 255, 1);color:white; text-align: center; ">
                        <th style = "width:30%;">Cedula</th>
                            <th style = "width:30%;">Paciente</th>
                            <th style = "width:20%;">Especialista</th>
                                <th style = "width:20%;">Especialidad</th>
                                    <th style = "width:20%;">Fecha</th>
                                        <th style = "width:20%;">Hora</th>
                                            <th style = "width:20%;">Estado</th>
                                                <th style = "width:20%;">Observacion</th>
                        </tr>
                    </thead>
                    <tbody id = "load_data">
                    </tbody>
                </table>
            </div>  
              </div>
        </div>
        </div>
<!--FECHAAAAAAA FORM--->
                    </div>
                </div><!-- /.panel-->
            </div><!-- /.col-->
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
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>
    <!-- Main JS-->
    <script src="../js/main.js"></script>
    <script src="../js/js/jquery-1.11.1.min.js"></script>
    <script src="../js/js/bootstrap.min.js"></script>
    <script src="../js/js/chart.min.js"></script>
    <script src="../js/js/chart-data.js"></script>
    <script src="../js/js/easypiechart.js"></script>
    <script src="../js/js/easypiechart-data.js"></script>
    <script src="../js/js/bootstrap-datepicker.js"></script>
    <script src="../js/js/custom.js"></script>
    
<script src = "js/jquery-ui.js"></script>
<script src = "js/ajax.js"></script>

</body>

</html>
<!-- end document-->