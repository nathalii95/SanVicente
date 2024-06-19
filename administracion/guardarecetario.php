<?php  
  session_start();
  if (!isset($_SESSION['nombre'])) {
    header('Location: index.php');
  } 
?>
<?php
include_once("conexion.php");
$fecha=$_POST["fecha"];
$nombre=$_POST["nombre"];
//especialidad
//especialista
$sintomas=$_POST["sintomas"];
$medicamento=$_POST["medicamento"];
$descripcion=$_POST["descripcion"];
$sentencia=$bd->prepare("INSERT INTO recetario(
fecha,
  paciente,
  sintomas,
  medicamento,
  descripcion)VALUES(
  :fecha,
  :nombre,
  :sintomas,
  :medicamento,
  :descripcion); ");
$sentencia->bindParam(':fecha',$fecha);
$sentencia->bindParam(':nombre',$nombre);
$sentencia->bindParam(':sintomas',$sintomas);
$sentencia->bindParam(':medicamento',$medicamento);
$sentencia->bindParam(':descripcion',$descripcion);
if($sentencia->execute()){
return header("Location:recetario.php");
}
else {
echo '<script> alert("error a guardar")  <script>;';
}
?>