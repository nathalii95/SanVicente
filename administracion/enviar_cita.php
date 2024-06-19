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
          <div class="alert " style="font-size: 15px; letter-spacing: 5px; color:white;background: rgba(0, 125, 255, 0.5);"><center> <strong> ENVIAR CITAS</strong></center>

<!-- /.Informacion-->

          </div>
          
        </div><!-- /.panel-->

  
        <div class="panel panel-default"  style="background-color: rgb(255,255,255,0.9);">
        
<!-- /.Informacion--> <a href="envio.php"><button style="color: white;margin: 30px 20px;background: grey; " type="button" class="btn btn-info" >
REGRESAR
</button></a>

      

                        <center><h1 style="color:rgba(0, 125, 255, 1);">ENVIAR CITA POR CORREO ELECTRÓNICO</h1></center>


          <div class="panel-body" style="">
            <div class="col-md-5" style="" >
  <!-- /.Informacion-->           

       <!----- Formulario  ---->


  <style type="text/css"> 

h1 {
  text-align: center; font-family: verdana; font-size: 24px;
  color: #f16e4e; font-weight: bold; letter-spacing: 7px;
}

p {
 

}

   </style>

<?php
include_once("conexion.php");
$id=$_GET['id'];

$sentencia=$bd->query("SELECT * 
  FROM cita c
  JOIN paciente p
   ON c.paciente=p.nombre_apellido
  JOIN especialista e
  ON c.id_especialista =e.id_especialista

  JOIN especialidad d
  ON  e.id_especialidad=d.id_especialidad


    where c.id_cita= '$id'

  ;");
//FecthAll va devolver todas las filas de la base de dato (::)accede a elemtos estatico y costantes y metodos de una clase , fecth_obl devuelve la fila de cada columna 
$pa=$sentencia->fetchAll(PDO::FETCH_OBJ);

//print_r($var);

?>

        
<form  action="correo.php" method="post"  >           
          



   <?php foreach($pa as $row): ?>

  <div class="form-group">
                  
                  <label>Codigo Paciente</label>
                  <input type="text" class="form-control" name="codigo" value="<?php echo $row->id_paciente; ?>" readonly>
                </div>
        <div class="form-group">

                  <label>Paciente</label>
                <select class="form-control"  name="nombre" readonly>
                      
                      <option value="<?php echo $row->nombre_apellido; ?>" ><?php echo $row->nombre_apellido; ?></option>
                      
                    </select>

                </div>

                

                <div class="form-group">
                  <label>correo</label>
                  <input type="email" class="form-control"  name="email" value="<?php echo $row->correo; ?>"  readonly>
                </div>


                <div class="form-group">
                  <label>Especialidad</label>
                  <input type="text" class="form-control" name="especialidad" value="<?php echo $row->nombre_especialidad; ?>"    readonly>
                </div>

<div class="form-group">
                  <label>Doctor</label>
                  <input type="text" class="form-control" name="doctor" value="<?php echo $row->nombre_doctor; ?>"  readonly> 
                </div>



                  <?php endforeach; ?>


</div>
                <div class="col-md-7">
            

<div class="form-group">
                  <label>Fecha</label>
    <input type="date" class="form-control" name="date" readonly value="<?php echo $row->fecha; ?>"  > 
                </div>
<div class="form-group">
                  <label>Hora</label>
                  <input type="time" class="form-control" name="time" readonly value="<?php echo $row->hora; ?>"  >
                </div>
                <label>Estado</label>
                <select class="form-control"  name="estado" readonly>
                      
                      <option value="<?php echo $row->estado; ?>" ><?php echo $row->estado; ?></option>
                      
                    </select>
                  <div class="form-group">
                  <label>observacion</label>
                  <input type="text" name="observacion" class="form-control" readonly value="<?php echo $row->observacion; ?>">
                </div>





                                      <div class="form-group">
                    <label>Informacion</label>
                      <textarea  name="mensaje" class="form-control" rows="3" ></textarea  > 
                  </div>

    
                  
                <button 

style="color:white; background:rgba(0, 125, 255, 1); " type="submit" class="btn ">ENVIAR</button>
      </div>
</form>

  <!-- /.Informacion-->   



  <div  class="col-sm-12">
        <p style="color: black;" class="back-link">Consultorio Medico " San Vicente "   <a href="index.php"></a></p>
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
 


</body>

</html>
<!-- end document-->
