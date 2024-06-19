<?php  
  session_start();
  if (!isset($_SESSION['nombre'])) {
    header('Location: index.php');
  }
?>
<?php
include_once("conexion.php");
$id=$_POST["id"];
$fecha=$_POST["fecha"];
$nombre=$_POST["nombre"];
//especialidad
//especialista
$sintomas=$_POST["sintomas"];
$medicamento=$_POST["medicamento"];
$descripcion=$_POST["descripcion"];
$sentencia=$bd->prepare("UPDATE recetario SET 
fecha=:fecha,
paciente=:nombre,
  sintomas=:sintomas,
    medicamento=:medicamento,
  descripcion=:descripcion
   WHERE id_recetario=:id;");
$sentencia->bindParam(':id',$id);
$sentencia->bindParam(':fecha',$fecha);
$sentencia->bindParam(':nombre',$nombre);
$sentencia->bindParam(':sintomas',$sintomas);
$sentencia->bindParam(':medicamento',$medicamento);
$sentencia->bindParam(':descripcion',$descripcion);
if($sentencia->execute()){
return header("Location:recetario.php");
}
else {
return "error";
}
?>