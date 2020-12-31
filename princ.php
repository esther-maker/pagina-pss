<?php
     session_start();
     if(isset($_GET['out'])) {
        
         session_destroy();
         header("Refresh:0; url=princ.php");
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Historia del arte en el siglo XIX</title>

<!--


-->

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body>

<!-- PRE LOADER -->
<div class="preloader">
     <div class="spinner">
          <span class="sk-inner-circle"></span>
     </div>
</div>


<!-- MENU -->
<div class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">

          <!-- NAVBAR HEADER -->
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <!-- lOGO -->
               <a href="index.html" class="navbar-brand">H A S C A L M + 19</a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home" class="smoothScroll">Inicio</a></li>
                    <li><a href="#contact" class="smoothScroll">Contacto</a></li>  
                    <?php
                        
                         if(isset($_SESSION['user'])) {
                              $user = $_SESSION['user'];
                              echo  "<li><a href='' class='smoothScroll'> $user</a></li>";
                        
                             
                         } else {
                              echo '<li><a href="/" class="smoothScroll">Iniciar sessión</a></li>';
                         }
                        
                          
                         ?>
                  
                    <?php
                         if(isset($_SESSION['user'])) {
                              echo '<li><a href="/princ.php?out=3232" class="smoothScroll">Cerrar sessión</a></li>';
                         }
                    ?>
                   
               </ul>
             
          </div>

     </div>
</div>


<!-- HOME -->
<section id="home" class="parallax-section">
     
     <div class="container"><div class="overlay"></div>
          <div class="row">

               <div class="col-md-8 col-sm-12">
                    <div class="home-text">
                         <h1>Historia del arte en el siglo XIX</h1>
                         
                         <ul class="section-btn">
                              <a href="#" class="smoothScroll"><span data-hover="Ver más temas">Ver más temas</span></a>
                         </ul>
                    </div>
               </div>

          </div>
     </div>

     <!-- Video -->
     <video controls autoplay loop muted>
          <source src="videos/video.mp4" type="video/mp4">
          Your browser does not support the video tag.
     </video>
</section>


<!-- ABOUT -->
<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="about-info">
                         <h3>el  arte en aspecto general</h3>
                         <h1>
								<p>Durante todo el siglo XIX el arte sufre una transformación conceptual que le conducirá a un cambio radical en cuanto a conceptos y formas. Partiendo de una base de estudio clásico, durante todo el siglo XIX comenzarán a sucederse diversos movimientos artísticos, resultado de procesos ideológicos que abarcarán los diferentes campos de las artes, en los que tanto la temática como la composición tradicional serán sustituidas por la imaginación y por nuevas formas de entender la vida.</p>
                                </h1>
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- PROJECT -->
<section id="project" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                   <div class="project-item">  <a href=""><img src="images/project-image1.jpg" class="img-responsive" alt=""></a>
                         
                           <div class="project-overlay">
                                <div class="project-info">
                                     <h1><a href="musica.html">Historia de la música</a></h1>
                                     <h3> siglo XIX</h3>
                             </div>
                      </div>
                      
                 </div>
            </div>

               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        
                              <img src="images/project-image2.jpg" class="img-responsive" alt="">
                         
                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1><a href="cine.html">Historia del cine</a></h1>
                                        <h3> siglo XIX</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        
                              <img src="images/project-image3.jpg" class="img-responsive" alt="">
                         
                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1><a href="arquitectura.html">Historia de la arquitectura</a></h1>
                                        <h3>siglo XIX <em></em></h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        
                              <img src="images/project-image4.jpg" class="img-responsive" alt="">
                         
                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1><a href="literatura.html">Historia de la literatura</a></h1>
                                        <h3>siglo XIX</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>               

          </div>
     </div>
</section>


<!-- TEAM -->




<!-- CONTACT -->
<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-3 col-md-6 col-sm-12">
                    <div class="section-title">
                         <h1>Contactanos!</h1>
                    </div>
               </div>

               <div class="clearfix"></div>

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <!-- CONTACT FORM HERE -->
                    <form id="contact-form" action="#" method="get" role="form">

                         <!-- IF MAIL SENT SUCCESSFULLY -->
                         <h6 class="text-success">Your message has been sent successfully. </h6>
                         
                         <!-- IF MAIL SENDING UNSUCCESSFULL -->
                         <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                         <div class="col-md-6 col-sm-6">
                              <input type="text" class="form-control" id="cf-name" name="cf-name" placeholder="Nombre">
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <input type="email" class="form-control" id="cf-email" name="cf-email" placeholder="Email Address">
                         </div>

                         <div class="col-md-12 col-sm-12">
                              <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">
                              <textarea class="form-control" rows="5" id="cf-message" name="cf-message" placeholder="Message"></textarea>
                         </div>

                         <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4">
                              <div class="section-btn">
                                   <button type="submit" class="form-control" id="cf-submit" name="submit"><span data-hover="Enviar mensaje">Enviar mensaje</span></button>
                              </div>
                         </div>
                    </form>
               </div>

          </div>
     </div>
</section>

<!-- FOOTER -->
<footer>
     <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6">
                 <div class="footer-info">
                    	<h2>Contactos</h2>
                         <p>mh102140@gmail.com</p>
                         <p>arte.historia00@gmail.com</p>
                         <p>&nbsp;</p>
                    </div>
               </div>

               <div class="col-md-3 col-sm-12">
               		
                    <h2>Más curiosidades</h2>
                    <p>Siguenos en:</p>
                    <ul class="social-icon">
                                            <li><a href="https://www.instagram.com/arte.historia.xix/" class="fa fa-instagram" target="_blank"></a></li>
                     
                    </ul>
   
               </div>

               <div class="clearfix"></div>

               <div class="col-md-12 col-sm-12">
                    <div class="copyright-text">
                         <p>Copyright © 2021 Esther Inc</p>
                    </div>
               </div>
               
          </div>
     </div>
</footer>

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>