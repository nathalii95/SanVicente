<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title></title>

   
       
    <!--Custom Font-->
    </head>
   <body>        
 

<div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../images/images.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php
include_once("../conexion.php");

$sentencia=$bd->query("SELECT nombre_apellido FROM administrador where usuario= '".$_SESSION['nombre']."'
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
                                                        <img src="../images/images.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">
 <?php
include_once("../conexion.php");

$sentencia=$bd->query("SELECT nombre_apellido FROM administrador where usuario= '".$_SESSION['nombre']."'
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
                                                <a href="../cerrar.php">
                                                    <i class="zmdi zmdi-power"></i>Cerrrar Session</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</body>
                                </html>