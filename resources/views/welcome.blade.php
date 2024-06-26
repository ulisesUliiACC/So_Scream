@extends('layouts/blankLayout')

@section('title', 'IMBA | So-Cream')


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
        <title>IMBA | So-Cream </title>

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
                                    <img src="assetss/img/logo.png" alt="">
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

        <!-- hero area -->
        <div class="hero-area hero-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 offset-lg-2 text-center">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">Industria Mexicana de Biotecnología Alimentaria</p>
                                <h1>So-Cream</h1>
                                <div class="hero-btns">
                                    <a href="{{ route('shop.shop') }}" class="boxed-btn">Comprar ahora</a>
                                    <a href="{{ route('Contacto') }}" class="bordered-btn">Contactanos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end hero area -->

        <!-- features list section -->
        <div class="list-section pt-80 pb-80">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="list-box d-flex align-items-center">
                            <div class="list-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="content">
                                <h3>Misión</h3>
                                <p>Ofrecer alimentos saludables y deliciosos mediante la ciencia y la naturaleza.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="list-box d-flex align-items-center">
                            <div class="list-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="content">
                                <h3>Visión</h3>
                                <p>Transformar la industria alimentaria con innovación biotecnológica.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="list-box d-flex justify-content-start align-items-center">
                            <div class="list-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <div class="content">
                                <h3>Objetivo</h3>
                                <p>Mejorar la nutrición y la experiencia culinaria de nuestros clientes.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end features list section -->

        <!-- product section -->
        <div class="product-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">
                            <h3><span class="orange-text">Próximamente</span> Nuevos Producto</h3>
                            <p>So-Cream: Haz de la cremosidad tú felicidad</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="#"><img src="assets/img/cafe/soya.webp" alt=""></a>
                            </div>
                            <h3>soya</h3>
                            <p class="product-price"><span></span> 85$ </p>
                            <a href="#" class="cart-btn"><i class="fas fa-shopping-cart"></i> Proximamente</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a><img src="assets/img/cafe/soya1.jpg" alt=""></a>
                            </div>
                            <h3>Leche de soya</h3>
                            <p class="product-price"><span></span> 70$ </p>
                            <a href="{{ route('shop.shop') }}" class="cart-btn"><i
                                    class="fas fa-shopping-cart"></i>Proximamente</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a><img src="assets/img/cafe/soya2.jpg" alt=""></a>
                            </div>
                            <h3>yogur de soya</h3>
                            <p class="product-price"><span></span> 35$ </p>
                            <a href="#" class="cart-btn"><i class="fas fa-shopping-cart"></i> Proximamente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product section -->

        <!-- cart banner section -->
        <!-- <section class="cart-banner pt-100 pb-100">
        <div class="container">
            <div class="row clearfix"> -->
        <!--Image Column-->
        <!-- <div class="image-column col-lg-6">
                    <div class="image">
                        <div class="price-box">
                            <div class="inner-price">
                                    <span class="price">
                                        <strong>30%</strong> <br> off per kg
                                    </span>
                                </div>
                            </div>
                        <img src="assets/img/a.jpg" alt="">
                        </div>
                    </div> -->
        <!--Content Column-->
        <!-- <div class="content-column col-lg-6">
         <h3><span class="orange-text">Deal</span> of the month</h3>
                        <h4>Hikan Strwaberry</h4>
                        <div class="text">Quisquam minus maiores repudiandae nobis, minima saepe id, fugit ullam similique! Beatae, minima quisquam molestias facere ea. Perspiciatis unde omnis iste natus error sit voluptatem accusant</div> -->
        <!--Countdown Timer-->
        <!-- <div class="time-counter"><div class="time-countdown clearfix" data-countdown="2020/2/01"><div class="counter-column"><div class="inner"><span class="count">00</span>Days</div></div> <div class="counter-column"><div class="inner"><span class="count">00</span>Hours</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Mins</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Secs</div></div></div></div>
                    <a href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- end cart banner section -->

        <!-- testimonail-section -->
        <div class="testimonail-section mt-150 mb-150">
            <div class="container">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">-</span> Testimonios</h3>
                        <p>Unete a nuestra lista de clientes satisfechos.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <div class="testimonial-sliders">
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="assets/img/avaters/avatar1.png" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>Alejandra Guzman <span>Consumidora local</span></h3>
                                    <p class="testimonial-body">
                                        " ¡IMBA superó mis expectativas! Sus productos son una explosión de sabores
                                        innovadores. ¡Una experiencia gastronómica inigualable que cautiva los sentidos!
                                        ¡Definitivamente, IMBA es mi elección para alimentos biotecnológicos de alta
                                        calidad! "
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="assets/img/avaters/avatar2.png" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>Luis Miguel <span>Consumidor local</span></h3>
                                    <p class="testimonial-body">
                                        " IMBA ha cambiado mi forma de ver la comida. Sus productos no solo son deliciosos,
                                        sino también nutritivos y llenos de innovación. Cada bocado es una aventura
                                        culinaria que espero con ansias. ¡Altamente recomendado para los amantes de la buena
                                        comida y la innovación gastronómica! "
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="assets/img/avaters/avatar3.png" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>Alejandro Fernandez <span>Consumidor local</span></h3>
                                    <p class="testimonial-body">
                                        " ¡Increíble calidad y sabor excepcional! IMBA ha elevado el estándar en la
                                        industria alimentaria. Sus productos son una fusión perfecta entre ciencia y sabor.
                                        Mi familia y yo estamos enamorados de sus creaciones únicas. ¡Gracias IMBA por hacer
                                        de nuestras comidas una experiencia extraordinaria! "
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end testimonail-section -->

        <!-- advertisement section -->
        <div class="abt-section mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="abt-bg">
                            <a href="#"><img src="assets/img/feature-bg.jpg" alt=""><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="abt-text">
                            <p class="top-sub">Desde 2022</p>
                            <h2>Nosotros somos <span class="orange-text">IMBA</span></h2>
                            <p>Descubre IMBA (Industria Mexicana de Biotecnología Alimentaria), donde la innovación se
                                encuentra con el
                                sabor. Somos apasionados por crear alimentos biotecnológicos excepcionales que equilibran
                                nutrición y
                                deliciosos sabores, transformando tu experiencia culinaria con cada bocado.</p>
                            <a href="about.html" class="boxed-btn mt-4">Saber más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end advertisement section -->

        <!-- shop banner -->
        <section class="shop-banner">
            <div class="container">
                <h3>Haz de la cremosidad <br> tu <span class="orange-text">felicidad.</span></h3>
                <div class="sale-percent"><span>Solo <br> por</span> $80<span>mxn</span></div>
                <a href="{{ route('shop.shop') }}" class="cart-btn btn-lg">Comprar ahora</a>
            </div>
        </section>
        <!-- end shop banner -->



        <!-- logo carousel -->
        <div class="logo-carousel-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <div class="section-title">
                                <h3><span class="orange-text">A la venta</span> en:</h3>
                                <p>Visita los puntos de venta autorizados</p>
                            </div>
                        </div>
                        <div class="logo-carousel-inner">
                            <div class="single-logo-item">
                                <img src="assets/img/company-logos/1.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="assets/img/company-logos/2.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="assets/img/company-logos/3.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="assets/img/company-logos/4.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="assets/img/company-logos/5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end logo carousel -->

        <!-- footer -->
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box about-widget">
                            <h2 class="widget-title">IMBA</h2>
                            <p>Industria Mexicana de Biotecnología Alimentaria. <br> Lideres de productos innovadores y
                                saludables
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
                        <p>Copyrights &copy; 2023 - <a href="">Code Strokes</a>, All Rights Reserved.<br>
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
