<?php  
  session_start();
  if (!isset($_SESSION['nombre'])) {
    header('Location: index.php');
  } 
include_once("conexion.php");
$nombre = $_POST["nombre"];
$nombrecapa=$_POST["nombrecapa"];
$curso=$_POST["curso"];
$fecha=$_POST["fecha"];
$hora=$_POST["hora"];
$estado=$_POST["estado"];
$observacion=$_POST["observacion"];
date_default_timezone_set("America/Guayaquil");  
$dateingresada = date_create($hora);
$date = date_format($dateingresada, 'H:i:s');
                         
                       //  $stmt = $bd->prepare("SELECT fecha, hora FROM cita WHERE fecha = '".$fecha."' AND hora = '".$date."'"); 

$stmt = $bd->prepare("SELECT c.id_especialista, c.id_especialidad, es.nombre_especialidad, e.nombre_doctor, c.paciente, c.fecha, c.hora, c.estado
FROM cita c, especialista e, especialidad es
WHERE c.fecha = '".$fecha."'
AND hora = '".$date."'
AND e.id_especialista = c.id_especialista
AND es.id_especialidad = c.id_especialidad
AND c.id_especialidad  = '".$nombrecapa."'
AND c.id_especialista = '".$curso."'
AND c.estado = 'asignado'
"); 

                         $stmt->execute(); 
                         $users = $stmt->fetchAll(); 
                         foreach($users as $user)  
                        {   
                          $fecha2 = $user['fecha']; 
                          $hora2 = $user['hora']; 
                          $especialista =  $user['nombre_doctor']; 
                          $especialidad =  $user['nombre_especialidad'];     
                        }  
                          if($date===$hora2){
                             echo '<script>
                             alert("Hora: '.$date.', Ya Registrada para el día '.$fecha.' con el '.$especialista.' - '. $especialidad.' ");  
                             window.location.href="citas.php";
                             </script> '; 
                  }
                   else {
                         $a = $nombre;
                         $b = $nombrecapa;
                         $c = $curso;
                         $d = $fecha;
                         $e = $date;
                         $f = $estado;
                         $g = $observacion; 
                         $h = $especialista2; 
                         $i = $especialidad2;      
                          $stmt = $bd->prepare("INSERT INTO cita (paciente,id_especialidad,id_especialista,fecha,hora,estado,observacion) VALUES ('$a','$b','$c','$d','$e','$f','$g')");
                          $stmt->execute();
                          echo '<script>
                                alert("Ingreso de Cita Exitosa Hora: '.$e.', para el día '.$d.'");
                                window.location.href="citas.php";
                               </script> '; 
                          $stmt->close();
                          $bd->close();
                  } 
  
?>