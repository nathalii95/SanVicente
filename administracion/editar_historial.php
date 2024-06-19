<?php  
	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: index.php');
	}
?>
<?php
include_once("conexion.php");
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$cedula=$_POST["cedula"];
$fecha=$_POST["fecha"];
$genero=$_POST["genero"];
$correo=$_POST["correo"];
$edad=$_POST["edad"];
$pais=$_POST["pais"];
$provincia=$_POST["provincia"];
$ciudad=$_POST["ciudad"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$civil=$_POST["civil"];
$mot=$_POST["mot"];
$recom=$_POST["recom"];
$sentencia=$bd->prepare("UPDATE historial SET 
	id_paciente=:nombre,
	cedula=:cedula,
	fecha_nacimiento=:fecha,
	genero=:genero,
	correo=:correo,
	edad=:edad,
	pais=:pais,
	provincia=:provincia,
	ciudad=:ciudad,
	direccion=:direccion,
	telefono=:telefono,
	civil=:civil,
	mot=:mot,
	recom=:recom
	 WHERE id_historial=:id;");
$sentencia->bindParam(':id',$id);
$sentencia->bindParam(':nombre',$nombre);
$sentencia->bindParam(':cedula',$cedula);
$sentencia->bindParam(':fecha',$fecha);
$sentencia->bindParam(':genero',$genero);
$sentencia->bindParam(':correo',$correo);
$sentencia->bindParam(':edad',$edad);
$sentencia->bindParam(':pais',$pais);
$sentencia->bindParam(':provincia',$provincia);
$sentencia->bindParam(':ciudad',$ciudad);
$sentencia->bindParam(':direccion',$direccion);
$sentencia->bindParam(':telefono',$telefono);
$sentencia->bindParam(':civil',$civil);
$sentencia->bindParam(':mot',$mot);
$sentencia->bindParam(':recom',$recom);
if($sentencia->execute()){
return header("Location:historial_general.php");
}
else {
return "error";
}
?>