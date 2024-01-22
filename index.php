<!DOCTYPE html>
<html>

<head>
	<title>CARABAYA</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css" />
	<!-- <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/meanmenu.min.css"> -->
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">

	<style>
		/* Agrega reglas de estilo para centrar las imágenes */
		.gallery-img-wrap {
			text-align: center;
		}

		/* Ajusta el estilo de las imágenes para que no se extiendan más allá de su contenedor */
		.gallery-img-wrap img {
			max-width: 100%;
			height: auto;
		}
	</style>
</head>

<body>
	<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
		<header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
							<a href="mailto:carabaya@turismo.com" itemprop="email"><i class="fas fa-envelope"></i>
								carabaya@turismo.com</a>
						</div>
						<div class="top-header-block">
							<a href="https://wa.me/9813639131 itemprop=" telephone"><i class="fas fa-phone"></i> +977
								9813639131</a>
						</div>
					</div>
					<div class="top-header-right">

						<?php
						session_start(); // Iniciar sesión para manejar variables de sesión
						
						if (isset($_SESSION["username"])) {
							// Si la variable de sesión "username" está establecida, muestra el nombre de usuario
							echo '<p>Hola, ' . $_SESSION["username"] . '.</p>';
						} else {
							// Si no está establecida, muestra los enlaces "Login" y "Register"
							echo '<div class="login-block">
							<a href="login.html">Login /</a>
                  <a href="login.html">Register</a>
              </div>';
						}
						?>
					</div>
				</div>
			</div>
			<!-- Top header Close -->
			<div class="main-header">
				<div class="container">
					<div class="logo-wrap" itemprop="logo">
						<img src="images/ligi.png" style="width: 200px;" alt="Logo Image">
						<!-- <h1>Education</h1> -->
					</div>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">
								<li><a href="index.php">Inicio</a></li>
								<!--<li><a href="">Lugares</a></li>-->
								<li><a href="">Comida</a></li>
								<li><a href="about.html">Informacion</a></li>
								<li><a href="gallery2.html">Galeria</a></li>
								<li><a href="contact.html">Contacto</a></li>
							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Close -->
		<div class="banner">
			<div class="owl-four owl-carousel" itemprop="image">
				<img src="images/Carabaya1.jpg" alt="Image of Bannner">
				<img src="images/Carabaya2.jpg" alt="Image of Bannner">
				<img src="images/Carabaya3.jpg" alt="Image of Bannner">
			</div>
			<div class="container" itemprop="description">
				<h1>Un lugar que debes conocer Carabaya</h1>
				<h3>El viaje aguarda.</h3>
			</div>
			<div id="owl-four-nav" class="owl-nav"></div>
		</div>
		<!-- <div class="banner">
			<div class="owl-five owl-carousel owl-theme">
				<div class="item-video">
					<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
					</iframe>
				</div>
				<div class="item-video">
					<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="item-video">
					<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="item-video">
					<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
					</iframe>
				</div>
				<div class="item-video">
					<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="item-video">
					<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
		  </div>
		</div> -->
		<!-- Banner Close -->
		<div class="page-heading">
			<div class="container">
				<h2>Lugares turisticos</h2>
			</div>
		</div>
		<!-- Popular courses End -->
		<div class="learn-courses">
			<div class="container">
				<div class="courses">
					<div class="owl-one owl-carousel">
						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap" itemprop="image"><img src="images/yo.jpg" alt="courses picture"></div>
							<a href="#" class="learn-desining-banner" itemprop="name">Plaza Mayor</a>
							<div class="box-body" itemprop="description">
								<p>Reconfortable sitio para brindar un aire de tranquilidad y diseño</p>
								<section itemprop="time">
									<p><span>Ubicacion:</span> 4 Years</p>
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap" itemprop="image"><img src="images/laberinto.jpg"
									alt="courses picture"></div>
							<a href="#" class="learn-desining-banner" itemprop="name">Laberinto</a>
							<div class="box-body" itemprop="description">
								<p>Un sitio con agradable vista y emocionante recorrido</p>
								<section itemprop="time">
									<p><span>Ubicacion:</span> 4 Years</p>
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap" itemprop="image"><img src="images/course-pic.jpg"
									alt="courses picture"></div>
							<a href="#" class="learn-desining-banner" itemprop="name">Learn Web Designing >>></a>
							<div class="box-body" itemprop="description">
								<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum
									lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
								<section itemprop="time">
									<p><span>Ubicacion:</span> 4 Years</p>
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap" itemprop="image"><img src="images/course-pic.jpg"
									alt="courses picture"></div>
							<a href="#" class="learn-desining-banner" itemprop="name">Learn Web Designing >>></a>
							<div class="box-body" itemprop="description">
								<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum
									lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
								<section itemprop="time">
									<p><span>Duration:</span> 4 Years</p>
									<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
									<p><span>Fee:</span> 4,00,000</p>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Learn courses End -->

		<!-- Closed WhyUs section -->
		<section class="page-heading">
			<div class="container">
				<h2>Galeria</h2>
			</div>
		</section>
		<section class="gallery-images-section" itemprop="image" itemscope itemtype="http://schema.org/ImageGallery">
			<div class="gallery-img-wrap">
				<a href="images/Comida1.jpeg" data-lightbox="example-set"
					data-title="Click the right half of the image to move forward.">
					<img src="images/Comida1.jpeg" alt="gallery-images" width="300" height="300">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/comida2.jpeg" data-lightbox="example-set"
					data-title="Click the right half of the image to move forward.">
					<img src="images/comida2.jpeg" alt="gallery-images" width="300" height="150px">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/comida3.jpeg" data-lightbox="example-set"
					data-title="Click the right half of the image to move forward.">
					<img src="images/comida3.jpeg" alt="gallery-images" width="300" height="300">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/Danza1.jpeg" data-lightbox="example-set"
					data-title="Click the right half of the image to move forward.">
					<img src="images/Danza1.jpeg" alt="gallery-images" width="300" height="300">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/Danza2.jpeg" data-lightbox="example-set"
					data-title="Click the right half of the image to move forward.">
					<img src="images/Danza2.jpeg" alt="gallery-images" width="300" height="300">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/Danza4.jpg" data-lightbox="example-set"
					data-title="Click the right half of the image to move forward.">
					<img src="images/Danza4.jpg" alt="gallery-images" width="300" height="300">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/Nevado.jpg" data-lightbox="example-set"
					data-title="Click the right half of the image to move forward.">
					<img src="images/Nevado.jpg" alt="gallery-images" width="300" height="300">
				</a>
			</div>
			<!--<div class="gallery-img-wrap">
				<a href="images/nevado2.avif" data-lightbox="example-set"
					data-title="Click the right half of the image to move forward.">
					<img src="images/nevado2.avif" alt="gallery-images" width="300" height="300">
				</a>
			</div>-->
		</section>
		<!-- End of gallery Images -->

		<section class="page-heading">
			<div class="container">
				<h2>Platos tipicos</h2>
			</div>
		</section>
		<section class="events-section" itemprop="event" itemscope itemtype=" http://schema.org/Event">
			<div class="container">
				<div class="event-wrap">
					<div class="img-wrap" itemprop="image">
						<img src="images/Comida1.jpeg" alt="event images">
					</div>
					<div class="details">
						<a href="">
							<h3 itemprop="name"></h3>
						</a>
						<p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit
							laudantium,
							sunt velit minus repellat fugit s</p>

						<h5 itemprop="startDate"><i class="far fa-clock"></i> </h5>
						<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> </h5>
					</div>
				</div>

				<div class="event-wrap">
					<div class="img-wrap" itemprop="image">
						<img src="images/comida2.jpeg" alt="event images">
					</div>
					<div class="details">
						<a href="">
							<h3 itemprop="name"></h3>
						</a>
						<p itemprop="description">Lorem ipsum dolor sit amet.</p>

						<h5 itemprop="startDate"><i class="far fa-clock"></i> </h5>
						<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> </h5>
					</div>
				</div>
			</div>
		</section>
		<!-- Latest News CLosed -->
		<section class="query-section">
			<div class="container">
				<p>Any Queries? Ask us a question at<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977
						9813639131</a></p>
			</div>
		</section>
		<!-- End of Query Section -->
		<footer class="page-footer">
			<div class="footer-first-section">
				<div class="container">
					<div class="box-wrap">
						<header>
							<h1>Somos</h1>
						</header>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, quisquam.</p>

						<h4><a href="tel:"><i class="fas fa-phone"></i> +051 958875564</a></h4>
						<h4><a href="mailto:info@educationpro.com"><i class="fas fa-envelope"></i> @gmail.com</a></h4>
						<h4><i class="fas fa-map-marker-alt"></i>Puno/ Carabaya</h4>
					</div>

					<div class="box-wrap">
						<header>
							<h1>links</h1>
						</header>
						<ul>
							<li><a href="#">Ubicacion</a></li>
							<li><a href="#">Informes</a></li>
							<li><a href="#">Pagos</a></li>
							<li><a href="#">Movilidad</a></li>
							<li><a href="#">Alojamiento</a></li>
						</ul>
					</div>

					<div class="box-wrap">
						<header>
							<h1>Novedades</h1>
						</header>
						<div class="recent-course-wrap">
							<img src="images/alojamiento.jpeg" alt="Ui/Ux Designing">
							<a href="">
								<div class="course-name">
									<h3>Alojamiento</h3>
									<p><span>$35</span> $17</p>
								</div>
							</a>
						</div>
						<div class="recent-course-wrap">
							<img src="images/comida2.jpeg" alt="Ui/Ux Designing">
							<a href="">
								<div class="course-name">
									<h3>Comida</h3>
									<p><span>$10</span> $7</p>
								</div>
							</a>
						</div>
					</div>

					<div class="box-wrap">
						<header>
							<h1>Contacto directo</h1>
						</header>
						<section class="quick-contact">
							<input type="email" name="Su Correo" placeholder="Escriba su Correo*">
							<textarea placeholder="Escriba su mensaje*"></textarea>
							<button>mensaje</button>
						</section>
					</div>

				</div>
			</div>
			<!-- End of box-Wrap -->
			<div class="footer-second-section">
				<div class="container">
					<hr class="footer-line">
					<ul class="social-list">
						<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-skype"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
					</ul>
					<hr class="footer-line">
				</div>
			</div>
			<div class="footer-last-section">
				<div class="container">
					<p>Copyright 2024 &copy; Explorar.com <span> | </span> Diseñado y hecho por Lorem, ipsum dolor. </p>
				</div>
			</div>
		</footer>

	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<!-- <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> -->
	<script type="text/javascript" src="js/custom.js"></script>
</body>

</html>