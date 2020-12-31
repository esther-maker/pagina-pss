<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos.css">
	<style type="text/css">
	body {
	background-image: url(fondo1.jpg);
}
    </style>
</head>  
<body>
 <form class="formulario" method="post">
    
    <h1>Registrate</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" placeholder="Nombre Completo" name="nombre">
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electronico" name="Correo">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" name="Contraseña">
         
         </div>
         <input type="submit" value="Registrate" class="button" name="boton">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="index.php">Iniciar Sesion</a></p>
     </div>
    </form>
    <?php
    include("registrar.php");
    ?>
</body>
</html>