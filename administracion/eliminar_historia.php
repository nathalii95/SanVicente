<?php  
  session_start();
  if (!isset($_SESSION['nombre'])) {
    header('Location: index.php');
  }
?>
<?php
include_once("conexion.php");
$id=$_POST["id"];
$sentencia=$bd->prepare("DELETE FROM historial WHERE id_historial=:id;");
$sentencia->bindParam(':id',$id);
if($sentencia->execute()){
return header("Location:historial_general.php");
}
else {
return "error";
}
?>