@extends('layouts/blankLayout')

@section('title', 'So Scream')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>IMBA | Blog</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assetss/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assetss/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assetss/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assetss/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assetss/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assetss/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assetss/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assetss/css/responsive.css">

</head>
<body>

	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="{{url('/')}}">Inicio</a></li>
								<li><a href="{{route('about')}}">Nosotros</a></li>
								<li><a href="{{route('blog')}}">Blog</a>
								<li><a href="{{route('Contacto')}}">Contacto</a></li>
								</li>
								<li><a href="{{route('shop.shop')}}">Shop</a>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="{{route('cart.carrito')}}"><i class="fas fa-shopping-cart"></i></a>

									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->



	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Información biotecnológica</p>
						<h1>Blog</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href=""><div ><img src="assets/img/cafe/soya.webp"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">🌱 Café Vegano: Una Opción Sostenible para Tu Mañana</a></h3>
							<p class="blog-meta">

								<span class="date"><i class="fas fa-calendar"></i> 27 noviembre, 2019</span>
							</p>
							<p class="excerpt">En un esfuerzo por ofrecer alternativas más sostenibles y éticas, los amantes del café ahora pueden disfrutar de una deliciosa taza sin comprometer sus valores. El suplemento de café a base de soya está ganando popularidad como una opción respetuosa con el medio ambiente y amigable con los animales.</p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div ><img src="assets/img/cafe/soya2.jpg"></div></a>
						<div class="news-text-box">
							<h3><a href="">☕ Sabor Inigualable, Sin Culpa</a></h3>
							<p class="blog-meta">

								<span class="date"><i class="fas fa-calendar"></i> 27 Deciember, 2019</span>
							</p>
							<p class="excerpt">Imagina el rico aroma del café recién hecho combinado con la suavidad de la leche de soya. Este suplemento no solo es una deliciosa adición a tu rutina matutina, sino que también es una elección consciente. ¡Ninguna vaca fue afectada en la creación de esta bebida!</p>
							<a href="" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href=""><div><img src="assets/img/cafe/granja.png"></div></a>
						<div class="news-text-box">
							<h3><a href="">👩‍🌾 De la Granja a Tu Taza: Transparencia en Cada Sorbo</a></h3>
							<p class="blog-meta">

								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2018</span>
							</p>
							<p class="excerpt">La trazabilidad es clave, y los fabricantes de este suplemento de café están comprometidos con la transparencia. Desde la selección de granos de café éticos hasta la producción de soya responsable, cada paso se realiza con integridad y respeto por el medio ambiente.</p>
							<a href="" class="read-more-btn"> read more<i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>

			<!--<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="pagination-wrap">
								<ul>
									<li><a href="#">Prev</a></li>
									<li><a href="#">1</a></li>
									<li><a class="active" href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
    -->
		</div>
	</div>
	<!-- end latest news -->



	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">IMBA</h2>
						<p>Industria Mexicana de Biotecnología Alimentaria. <br> Lideres de productos innovadores y saludables
							en el campo de la biotecnología alimentaria.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Ubicanos</h2>
						<ul>
							<li>Paraje Lomas de San Juan s/n, de, Méx.</li>
							<li>IMBA@support.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Directorio</h2>
						<ul>
							<li><a href="index.html">Inicio</a></li>
							<li><a href="about.html">Nosotros</a></li>
							<li><a href="news.html">Blog</a></li>
							<li><a href="contact.html">Contacto</a></li>
							<li><a href="services.html">Shop</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribete</h2>
						<p>Suscríbase a nuestra lista de correo para recibir las últimas actualizaciones.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->

	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">

					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->

	<!-- jquery -->
	<script src="assetss/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assetss/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assetss/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assetss/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assetss/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assetss/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assetss/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assetss/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assetss/js/sticker.js"></script>
	<!-- main js -->
	<script src="assetss/js/main.js"></script>

</body>
</html>

@endsection
<script>
  document.getElementById('user-icon').addEventListener('click', function() {
      var userOptions = document.getElementById('user-options');
      if (userOptions.style.display === 'none' || userOptions.style.display === '') {
          userOptions.style.display = 'block';
      } else {
          userOptions.style.display = 'none';
      }
  });

  // Cerrar las opciones de usuario si se hace clic fuera de ellas
  document.addEventListener('click', function(event) {
      var userOptions = document.getElementById('user-options');
      var userIcon = document.getElementById('user-icon');

      if (event.target !== userIcon && event.target !== userOptions) {
          userOptions.style.display = 'none';
      }
  });
</script>
