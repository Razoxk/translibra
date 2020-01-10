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
                <h3>Get in touch</h3>
                <p class="lead">Let us give you more details about the special offer website you want us. Please fill out the form below. <br>We have million of website owners who happy to work with us!</p>
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
						<h3>Headquarters</h3>
						<p>PO Box 16122 Collins Street West 
							<br> Victoria 8007 Australia</p>
					</div>
					<div class="address-item">
						<div class="address-icon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<h3>Email Us</h3>
						<p>info@yoursite.com
							<br>info@yoursite.com</p>
					</div>
					<div class="address-item">
						<div class="address-icon">
							<i class="icon icon-headphones"></i>
						</div>
						<h3>Call Us</h3>
						<p>+61 3 8376 6284
							<br>+61 3 8376 6185</p>
					</div>
				</div>
			</div><!-- end row -->
			
        </div><!-- end container -->
    </div><!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="images/logos/logo-2.png" alt="" />
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>                        
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-md-6 col-lg-3">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Useful links</h3>
                        </div>

                        <ul class="footer-links hov">
                            <li><a href="#">Home <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Blog <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Pricing <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">About <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Faq <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Contact <span class="icon icon-arrow-right2"></span></a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-md-6 col-lg-3">
                    <div class="footer-recent clearfix">
                        <div class="widget-title">
                            <h3>Recent posts</h3>
                        </div>
						
						<ul>
							<li>
								<i class="fa fa-user" aria-hidden="true"></i>
								<span>Posted By : Ahmed Rubel</span>
								<i class="fa fa-clock-o" aria-hidden="true"></i>
								<span> Time : 1.30 Am</span>
								<h2>Etiam dignissim augue a commodo</h2>
							</li>
							<li>
								<i class="fa fa-user" aria-hidden="true"></i>
								<span>Posted By : Ahmed Rubel</span>
								<i class="fa fa-clock-o" aria-hidden="true"></i>
								<span> Time : 1.30 Am</span>
								<h2>Etiam dignissim augue a commodo</h2>
							</li>
							<li>
								<i class="fa fa-user" aria-hidden="true"></i>
								<span>Posted By : Ahmed Rubel</span>
								<i class="fa fa-clock-o" aria-hidden="true"></i>
								<span> Time : 1.30 Am</span>
								<h2>Etiam dignissim augue a commodo</h2>
							</li>
						</ul>
						                       
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				<div class="col-md-6 col-lg-3">
					<div class="widget footer-contact clearfix">
						<div class="widget-title">
                            <h3>Contact Us</h3>
                        </div>
						
						<ul>
							<li>Address: PO Box 16122 Collins Street West Victoria 8007 Australia</li>
							<li>Phone: <a href="#">+62 3 8376 8080  </a></li>
							<li>Email: <a href="#">info@yoursite.com </a></li>
						</ul>
						<ul class="social-list">
							<li><a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://linkedin.com/" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://www.instagram.com/" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://plus.google.com/" class="googlePlus"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						
					</div>
				</div>
				
				
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Linkweb</a> Design By : 
					<a href="https://html.design/">html design</a></p>
                </div>

                
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