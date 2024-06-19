<?php  
	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: index.php');
	}
?>
<?php
include_once("conexion.php");
$id=$_POST["id"];
$cedula=$_POST["cedula"];
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$fecha=$_POST["fecha"];
$genero=$_POST["genero"];
$sentencia=$bd->prepare("UPDATE paciente SET 
	cedula=:cedula,
	nombre_apellido=:nombre,
	correo=:email,
	contrasena=:pass,
	fecha_nacimiento=:fecha,
	sexo=:genero
	 WHERE id_paciente=:id;");
$sentencia->bindParam(':id',$id);
$sentencia->bindParam(':cedula',$cedula);
$sentencia->bindParam(':nombre',$nombre);
$sentencia->bindParam(':email',$email);
$sentencia->bindParam(':pass',$pass);
$sentencia->bindParam(':fecha',$fecha);
$sentencia->bindParam(':genero',$genero);
if($sentencia->execute()){
return header("Location:paciente.php");
}
else {
return "error";
}
?>