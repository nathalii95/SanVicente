
<?php


    $usuario = "root"; //en ste caso root por ser localhost
    $password = "";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="sanvicente"; //nombre de la base de datos


//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 


//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");
//recuperar las variables
    $nombre=$_POST['name']; //name="nombre"
        $apellido=$_POST['subject'];
    $correo=$_POST['email']; //name="correo"
      $telefono=$_POST['message'];
   

    //sentencia sql
    $sql="INSERT INTO contacto (nombre_contacto,telefono,correo,mensaje) VALUES ('$nombre','$apellido','$correo','$telefono')"; //manda a traer los valores de '$nombre','$correo','$mensaje'
    

    //ejecutamos la consulta

    $resultado= mysqli_query($conexion,$sql);

 if ($resultado==null) {
  echo '<script>
    alert("Error");
 location.href="index.html";
 </script> ';
 }else{

    echo '<script>
    alert("Su mensaje ha sido Enviado");
 location.href="index.html";
 </script> ';
 }  
   //cerrar conexion
mysqli_close($conexion);
    
?>