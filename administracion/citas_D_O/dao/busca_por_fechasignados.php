<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once '../dao/adminDAOasignados.php';
$impr = new adminDAO();
if($_POST['desde']==false || $_POST['hasta']==false){
include('../includes/imprimir_bitacorasignados.php');
}else{
$desde = $_POST['desde'];
$hasta = $_POST['hasta'];
$datos = $impr->buscarAllBitacoraFecha($desde,$hasta);
?>
<?php 
if(count($datos)>0){ 
for($x=0; $x<count($datos); $x++){
?>
<tr>
<td><?php echo $datos[$x]['id_cita']; ?></td>
<td><?php echo $datos[$x]['paciente']; ?></td>
<td><?php echo $datos[$x]['nombre_especialidad']; ?></td>
<td><?php echo $datos[$x]['nombre_doctor']; ?></td>
<td><?php echo fechaNormal($datos[$x]['fecha']); ?></td>
<td><?php echo $datos[$x]['hora']; ?></td>
<td>ocupadas</td>

</tr>
<?php
}
}else{
?>
<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No Hay datos  </td><td valign="top" colspan="8" class="dataTables_empty">Esta Citas Esta Disponible </td></tr>
<?php
}
}			
?>