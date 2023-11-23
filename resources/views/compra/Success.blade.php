@extends('layouts/blankLayout')

@section('title', 'IMBA | So-Cream')


@section('content')



<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Edgecut</title>


  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css/bootstrap.css') }}" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css/style.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css/responsive.css') }}" />

</head>

<body>




  <!-- about section -->

  <section class="about_section layout_padding long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ asset('assets/img/about-img.png') }}" alt="unu">

          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Gracias por su compra  UwU
              </h2>
            </div>
            <p>
              Gracias por comprar  nuestro producto y que comparta esa esperencia de estar en su hogar y que disfrute mucho de nuestro producto
            </p>
            <p>Se te enviara un correo de confirmacion y detalles de tu envio</p>
            <a href="{{url('/')}}">
              Regresar a comprar
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->



<!-- jQery -->
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('js/custom.js') }}"></script>

  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>


@endsection
