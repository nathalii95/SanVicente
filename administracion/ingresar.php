<?php 
session_start();
include_once 'conexion.php';
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$sentencia = $bd->prepare('select * from administrador where 
								usuario = ? and contrasena = ?;');
$sentencia->execute([$usuario, $contrasena]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);
if ($datos === FALSE) {
echo '<script>
    alert("Incorrecto, Intentelo de Nuevo");
   window.location.href="index.php";
 </script> ';  
	}elseif($sentencia->rowCount() == 1){
		$_SESSION['nombre'] = $datos->usuario;
		 echo '<script>
    alert("Bienvenido Administrador");
   window.location.href="inicio.php";
 </script> ';  
	}
?>