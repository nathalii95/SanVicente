<?php 
$mysqli=new mysqli("localhost","root","12345678","sanvicente"); 
$cedula=$_POST["cedula"];
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$contrasena=$_POST["contrasena"];
$rpass=$_POST['rpass'];
$fecha=$_POST["fecha"];
$genero=$_POST["genero"];
	$checkemail=mysqli_query($mysqli,"SELECT * FROM paciente WHERE correo='$correo'");
	$check_mail=mysqli_num_rows($checkemail);
		if($contrasena==$rpass){
			if($check_mail>0){
 echo '<script>
    alert("Incorrecto, ya existe el correo, verifique sus datos");
   window.location.href="index3.php";
 </script> ';  
			}else{				
				//require("connect_db.php");
               //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO paciente(cedula,nombre_apellido, correo, contrasena, fecha_nacimiento, sexo) VALUES('$cedula','$nombre','$correo','$contrasena','$fecha','$genero')");
				//echo 'Se ha registrado con exito';
			 echo '<script>
    alert("USUARIO REGISTARADO EXITOSAMENTE");
   window.location.href="index.php";
 </script> ';  		
			}
		}else{
			echo '<script>
    alert("contraseña son incorrectas");
   window.location.href="registrarse.php";
 </script> ';  
		}
?>