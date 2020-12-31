<?php

  
$Conexion = mysqli_connect("localhost","root","","prueba");



if(isset($_POST['boton'])){


if(strlen($_POST['Usuario']) >= 1 && strlen($_POST['Contraseña']) >= 1){

  $Usuario = $_POST['Usuario'];
  $Contraseña = $_POST['Contraseña'];

  $Consulta = mysqli_query($Conexion, "SELECT * FROM usuarios WHERE nombre = '$Usuario' and contraseña= '$Contraseña'");

  $Verificacion = mysqli_num_rows($Consulta);

  if($Verificacion == 1){
    session_start();
    $_SESSION['user'] = $Usuario;
  
    echo '
       <script>
          
         alert("Ha ingresado");
         window.location.replace("princ.php");
       </script>
       
    ';
  }

  else{
    echo '
       <script>
         alert("Contraseña/ usuario incorrectos");
       </script>
    ';
  }
}
}


























































































































