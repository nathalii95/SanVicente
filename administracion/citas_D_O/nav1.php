  <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity"><?php
include_once("../../conexion.php");


$sql = "SELECT COUNT(*) AS codigo
                FROM cita WHERE  estado='asignado' ";
$stm = $bd->prepare($sql);
//pasamos el parámetro almacenado en $id
$stm->execute();
echo $stm->fetchColumn(); 
?></p></span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>TIENE <?php
include_once("../../conexion.php");


$sql = "SELECT COUNT(*) AS codigo
                FROM cita WHERE  estado='asignado' ";
$stm = $bd->prepare($sql);
//pasamos el parámetro almacenado en $id
$stm->execute();
echo $stm->fetchColumn(); 
?> CITAS</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                   <p>
                                                       <table  class="table table-striped table-bordered table-hover  text-dark"   >
                              
 <thead>
 <tr style="background:brown;color:white; ">
                              
    
      

      <th scope="col"  >Paciente</th>
       
       
   
        <th scope="col">Fecha</th>

       <th scope="col">Hora</th>

                                    </tr>
                                </thead>
<tbody>
   <!-- REGISTROS DE BD -->                                
   <?php
include_once("../../conexion.php");

$sentencia=$bd->query("SELECT * 
  FROM cita c
  JOIN paciente p
ON c.paciente=p.nombre_apellido
WHERE  c.estado='asignado' 


ORDER BY c.id_cita

  ;");
//FecthAll va devolver todas las filas de la base de dato (::)accede a elemtos estatico y costantes y metodos de una clase , fecth_obl devuelve la fila de cada columna 
$paciente=$sentencia->fetchAll(PDO::FETCH_OBJ);

//print_r($var);

?>
<?php
foreach($paciente as $row) {?>

            <tr >

      <td><?php echo $row->nombre_apellido?></td>
      <td><?php echo $row->fecha?></td> 
      <td><?php echo $row->hora?></td> 

                                    </tr>
    
<?php }?>

 </tbody>
 </table>
                                                   </p>
               <div class="notifi__footer">
                                                <a href="citas_asignada.php">Ir </a>
                                            </div>
                                                </div>