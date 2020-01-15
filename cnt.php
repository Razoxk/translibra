<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Translibra</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/icono.PNG" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">  
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- LOADER -->
   
<?php
include ("navbar.php");
?>
    <div class="banner-area banner-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2><span>Contacto</span></h2>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Póngase en Contacto <br> Escríbanos!</h3>
                <p class="lead">Permítanos brindarle más detalles sobre el sitio web de ofertas especiales que desea. Por favor, rellene el siguiente formulario. <br>¡Tenemos millones de propietarios de sitios web que están felices de trabajar con nosotros!</p>
            </div><!-- end title -->

            
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contacto-form" method="POST" action="mailler.php">
                            <input type="text" class="form-control" name="txtnombre"placeholder="Nombre (*)">
							<input type="text" class="form-control" name="txtcorreo" placeholder="Correo (*)">
							<input type="text" class="form-control" name="txtnumero" placeholder="Telefono">
							<textarea class="form-control" rows="3" name="txtmensaje" placeholder="Mensaje (*)"></textarea>
							<h3>(*) Campos Obligatorios</h3>
                            <button class="btn btn-danger" type="submit" onclick='alert("Hemos recibido su mensaje. Le contactaremos a la brevedad.")'>Enviar</button><br><br>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
			
			<div class="row">
				<div class="offset-md-1 col-sm-10 col-md-10 offset-sm-1 pd-add">
					<div class="address-item">
						<div class="address-icon">
							<i class="icon icon-location2"></i>
						</div>
						<h3>Sede</h3>
						<p>Maria Luisa Santander 468 oficina 212 
							<br> providencia – Santiago</p>
					</div>
					<div class="address-item">
						<div class="address-icon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<h3>Correo</h3>
						<p>contacto@translibra.cl
							
					</div>
					<div class="address-item">
						<div class="address-icon">
							<i class="icon icon-headphones"></i>
						</div>
						<h3>Llámanos</h3>
						<p>+569 9837 3147
							
					</div>
				</div>
			</div><!-- end row -->
			
        </div><!-- end container -->
    </div><!-- end section -->

 
				
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <!--<div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Linkweb</a> Design By : 
					<a href="https://html.design/">html design</a></p>
                </div>-->
                
     <?php
     include ("footer.php");
     ?>

                
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    

</body>
</html>