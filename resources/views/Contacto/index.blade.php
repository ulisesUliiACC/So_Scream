@extends('layouts/blankLayout')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>IMBA | Contacto</title>

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
                <li><a href="{{ url('/') }}">Inicio </a></li>
                <li><a href="{{ route('about') }}">Nosotros</a></li>
                <li><a href="news.html">Blog</a></li>
                <li><a href="{{ route('Contacto') }}">Contacto</a></li>
                <li><a href="{{ route('shop.shop') }}">Shop</a></li>
                <li>
                    <div class="header-icons">
                        <a class="shopping-cart" href="{{ route('cart.carrito') }}"><i
                                class="fas fa-shopping-cart"></i></a>
                        <a class="user-icon" id="user-icon"><i class='fas fa-user'></i></a>
                        <!-- Opciones de usuario -->
                        <div class="user-options" id="user-options">
                            <ul>

                              @if (!Auth::check())
                              <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                          @endif
                                <li><a href="{{route('profile.edit')}}">Perfil</a></li>
                                <li>
                                  @if (Auth::check())
                                  <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                  <li><a  href="{{route('logout')}}" onclick="event.preventDefault();
                                    this.closest('form').submit();">Cerrar sesión</a></li>
                                  </form>
                                  @endif
                                </li>



                            </ul>
                        </div>
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

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Buscador:</h3>
							<input type="text" placeholder="Texto">
							<button type="submit">Buscar<i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Soporte 24/7</p>
						<h1>Contactanos</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Envíanos un mensaje</h2>
						<p>Puedes contactarnos mediante el siguiente formulario si tiene dudas o sugerencias.</p>
					</div>
					<div id="form_status"></div>
					<div class="contact-form">
						<form method="POST" action="{{ route('productos.store') }}" id="fruitkha-contact">
              			@csrf
							<p>
								<input type="text" placeholder="Nombre" name="name" id="name">
								<input type="email" placeholder="Correo electrónico" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Teléfono" name="telefono" id="phone">
								<input type="text" placeholder="Asunto" name="asunto" id="subject">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10"
									placeholder="Mensaje"></textarea></p>
							<input type="hidden" name="mensaje" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Enviar"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Direción</h4>
							<p>Paraje Lomas de San Juan <br> s/n, de, Méx. <br> Capulhuac</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Horario</h4>
							<p>Lunes a Viernes: 8 AM - 9 PM <br> Sábado - Domingo: 10 AM - 8 PM </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contacto</h4>
							<p>Phone: +00 111 222 3333 <br> Email: IMBA@soporte.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Estamos ubicados en:</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.6631042636277!2d-99.4785947250393!3d19.340419943618823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20a1464000001%3A0x1c254456341588a0!2sUniversidad%20Tecnol%C3%B3gica%20del%20Valle%20de%20Toluca!5e0!3m2!1ses!2smx!4v1699835594267!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<!-- end google map section -->


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
					<p>Copyrights &copy; 2023 - <a href="">Code Strokes</a>,  All Rights Reserved.<br>
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
	<!-- form validation js -->
	<script src="assetss/js/form-validate.js"></script>
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
