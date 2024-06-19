<?php
$mysqli=new mysqli("localhost","root","12345678","sanvicente"); 

$nombre =$_POST['nombre'];
$email =$_POST['email'];
$especialidad =$_POST['especialidad'];
$doctor =$_POST['doctor'];
$date =$_POST['date'];
$time =$_POST['time'];
$mensaje =$_POST['mensaje'];
$destinatario ="Correo: $email \n";
$asunto = "Consultorio San vicente  ";
$carta ="Para: $nombre \n";
$carta .="Correo: $email \n";
$carta .="Cargo: $especialidad \n";
$carta .="Doctor: $doctor \n";
$carta .="Fecha: $date \n";
$carta .="Hora: $time \n";
$carta .="Mensaje: $mensaje";
mail($destinatario, $asunto, $carta);
echo "<script>alert('correo enviado existosamente')</script>";
echo "<script> setTimeout(\"location.href='envio.php'\",1000)</script>";
?>