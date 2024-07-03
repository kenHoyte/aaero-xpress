<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Optime Logistics &amp; Transportation Templatei">
    <link href="{{asset('backend/assets/images/aeroexp.ico')}}" rel="icon">
    <title>AeroExpress</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700%7cPoppins:400,600,700&amp;display=swap">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/libraries.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
  </head>
  
  <body>
    <div class="wrapper">
      <!-- =========================
          Header
      =========================== -->
      @include('frontend.layouts.navbar')
  
      
        @yield('content')
      <!-- ========================
              Footer
      ========================== -->
      @include('frontend.layouts.footer')
  
      <div class="module__search-container">
        <i class="fa fa-times close-search"></i>
        <form class="module__search-form">
          <input type="text" class="search__input" placeholder="Type Words Then Enter">
          <button class="module__search-btn"><i class="fa fa-search"></i></button>
        </form>
      </div><!-- /.module-search-container -->
  
      <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>
    </div><!-- /.wrapper -->
  
    <script data-cfasync="false" src="{{asset('frontend/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
  
  
  </body></html>