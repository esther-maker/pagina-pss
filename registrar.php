<?php

$Conexion = mysqli_connect("localhost","root","","prueba");
if(isset($_POST['boton'])){

if(strlen($_POST['nombre']) >= 1 && strlen($_POST['Contraseña'])>1 && strlen($_POST['Correo']) >= 1) {
  $nombre = $_POST['nombre'];
  $Contraseña = $_POST['Contraseña'];
    $Correo = $_POST['Correo'];
  $Consulta =  " INSERT INTO usuarios (nombre, contraseña, correo ,id_rol) VALUES ('$nombre','$Contraseña','$Correo',2)";
  $resultado = mysqli_query($Conexion,$Consulta);

  if($resultado){
    echo '
       <script>
         alert("Se ha guardado su nueva cuenta");
         window.location.replace("index.php");
       </script>
    ';
  }

}
}



?>
