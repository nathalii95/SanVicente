<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/consultorio.png" type="image" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="functions.js"></script>
       <script src="functions_e.js"></script>
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  

       
    <!--Custom Font-->
    </head>
   <body>        
 

<div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/images.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">
<?php
include_once("conexion.php");

$sentencia=$bd->query("SELECT * FROM paciente WHERE  correo= '".$_SESSION['nombre']."'
    ");

$paciente=$sentencia->fetchAll(PDO::FETCH_OBJ);

//print_r($var);

?>

<?php
foreach($paciente as $row) {?>
<p style=" "><?php echo $row->nombre_apellido?></p> 
<?php }?></a></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/images.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">
 <?php
include_once("conexion.php");

$sentencia=$bd->query("SELECT * FROM paciente WHERE  correo= '".$_SESSION['nombre']."'
    ");

$paciente=$sentencia->fetchAll(PDO::FETCH_OBJ);

//print_r($var);

?>

<?php
foreach($paciente as $row) {?>
<p style=" "><?php echo $row->nombre_apellido?></p> 
<?php }?></a>
                                                    </h5>
                                                    <span class=""></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="cerrar.php">
                                                    <i class="zmdi zmdi-power"></i>Cerrrar Session</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</body>
                                </html>