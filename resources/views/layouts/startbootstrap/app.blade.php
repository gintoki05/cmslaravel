<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="description" content="MIT Konsultan - Jasa Pembuatan Website from http://www.mitkonsultan.com/">
    <meta name="author" content="http://www.mitkonsultan.com/">    
    <title>{{ config('MIT Konsultan') }}MIT - Jasa Pembuatan Website</title>
    <!-- Bootstrap CSS-->
    <head>

      {{-- <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
  
      <title>Creative - Start Bootstrap Theme</title> --}}
      {{-- Favicon --}}
      <link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon">

      <!-- Bootstrap core CSS -->
      <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  
      <!-- Custom fonts for this template -->
      <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  
      <!-- Plugin CSS -->
      <link href="{{ asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
  
      <!-- Custom styles for this template -->
      <link href="{{ asset('css/creative.css')}}" rel="stylesheet">
  
     </head>

  <body id="page-top">

    <!-- Navigation -->
    @include('layouts.startbootstrap.partials._navbar')

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Musi IT Konsultan</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Musi IT Konsultan merupakan penyedia jasa pembuatan, pengembangan
              dan pengelolaan website yang senantiasa berusaha profesional dan amanah dalam
              memberikan pelayanan</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Tentang Kami</a>
          </div>
        </div>
      </div>
    </header>

    @yield('content')
    <!-- Page Footer-->
    <footer class="main-footer">
        @include('layouts.startbootstrap.partials._footer')
      </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/scrollreveal/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/creative.min.js') }}"></script>

  </body>

</html>
