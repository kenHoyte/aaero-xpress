<header id="header" class="header header-transparent">
  <nav class="navbar navbar-expand-lg sticky-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{asset('backend/assets/images/aero-light.png')}}" class="logo-light" alt="logo" height="38" >        
        <img src="{{asset('backend/assets/images/aero.png')}}" class="logo-dark" alt="logo" height="38" >        

      </a>
      <button class="navbar-toggler" type="button">
        <span class="menu-lines"><span></span></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavigation">
        <ul class="navbar-nav ml-auto">
          <li class="nav__item with-dropdown">
            <a href="{{ route('home') }}" class="dropdown-toggle nav__item-link {{ Request::routeIs('home') ? 'active' : '' }}">Home</a>
            {{-- <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <ul class="dropdown-menu">
              <li class="nav__item"><a href="{{ route('home') }}" class="nav__item-link">Home Main</a></li>
              <li class="nav__item"><a href="home-modern.html" class="nav__item-link">Home Modern</a></li>
              <li class="nav__item"><a href="home-classic.html" class="nav__item-link">Home Classic</a></li>
            </ul><!-- /.dropdown-menu --> --}}
          </li><!-- /.nav-item -->
          <li class="nav__item with-dropdown">
            <a href="{{ route('aboutUs') }}" class="dropdown-toggle nav__item-link {{ Request::routeIs('aboutUs') ? 'active' : '' }}">Company</a>
            {{-- <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <ul class="dropdown-menu">
              <li class="nav__item"><a href="{{ route('aboutUs') }}" class="nav__item-link">About Us</a></li>
              <li class="nav__item"><a href="why-us.html" class="nav__item-link">Why Choose Us</a></li>
              <li class="nav__item"><a href="leadership-team.html" class="nav__item-link">Leadership Team</a></li>
              <li class="nav__item"><a href="global-locations.html" class="nav__item-link">Global Locations</a></li>
              <li class="nav__item"><a href="gallery.html" class="nav__item-link">Our Gallery</a></li>
              <li class="nav__item"><a href="careers.html" class="nav__item-link">Careers</a></li>
            </ul><!-- /.dropdown-menu --> --}}
          </li><!-- /.nav-item -->
          <li class="nav__item with-dropdown">
            <a href="{{ route('services') }}" class="dropdown-toggle nav__item-link {{ Request::routeIs('services') ? 'active' : '' }}">Services</a>
            {{-- <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <ul class="dropdown-menu wide-dropdown-menu">
              <li class="nav__item">
                <div class="row mx-0">
                  <div class="col-sm-6 dropdown-menu-col">
                    <h6>Transport Services</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="single-service.html">Warehousing</a></li>
                      <li class="nav__item"><a class="nav__item-link" href="single-service.html">Air Freight</a></li>
                      <li class="nav__item"><a class="nav__item-link" href="single-service.html">Ocean Freight</a></li>
                      <li class="nav__item"><a class="nav__item-link" href="single-service.html">Road Freight</a></li>
                      <li class="nav__item"><a class="nav__item-link" href="single-service.html">Supply Chain</a></li>
                      <li class="nav__item"><a class="nav__item-link" href="single-service.html">Packaging</a></li>
                    </ul>
                  </div><!-- /.col-sm-6 -->
                  <div class="col-sm-6 dropdown-menu-col">
                    <h6>Industry Solutions</h6>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Retail &amp; Consumer</a></li>
                      <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Sciences &amp; Healthcare</a></li>
                      <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Industrial &amp; Chemical</a></li>
                      <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Power Generation</a></li>
                      <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Food &amp; Beverage</a></li>
                      <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Oil &amp; Gas</a></li>
                    </ul>
                  </div><!-- /.col-sm-6 -->
                </div><!-- /.row -->
              </li><!-- /.nav-item -->
            </ul><!-- /.dropdown-menu --> --}}
          </li><!-- /.nav-item -->
          {{-- <li class="nav__item with-dropdown">
            <a href="{{ route('blog') }}" class="dropdown-toggle nav__item-link {{ Request::routeIs('blog') ? 'active' : '' }}">News &amp; Media</a>
            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <ul class="dropdown-menu">
              <li class="nav__item"><a href="{{ route('blog') }}" class="nav__item-link">Blog Grid</a></li>
              <li class="nav__item"><a href="blog-single-post.html" class="nav__item-link">Blog Single Post</a></li>
              <li class="nav__item"><a href="case-studies.html" class="nav__item-link">Case Studies</a></li>
              <li class="nav__item"><a href="case-studies-single.html" class="nav__item-link">Case Study Single</a></li>
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item --> --}}
          <li class="nav__item with-dropdown">
            <a href="{{ route('track') }}" class="dropdown-toggle nav__item-link {{ Request::routeIs('track') ? 'active' : '' }}">Track and Trace</a>
            {{-- <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <ul class="dropdown-menu">
              <li class="nav__item"><a href="{{ route('requestQuote') }}" class="nav__item-link">Request a Quote</a></li>
              <li class="nav__item"><a href="{{ route('track') }}" class="nav__item-link">Track and Trace</a></li>
              <li class="nav__item"><a href="find-location.html" class="nav__item-link">Find Location</a></li>
              <li class="nav__item"><a href="rates.html" class="nav__item-link">Rates &amp; Pricing</a></li>
              <li class="nav__item"><a href="faqs.html" class="nav__item-link">Help and FAQs</a></li>
            </ul><!-- /.dropdown-menu --> --}}
          </li><!-- /.nav-item -->
          {{-- <li class="nav__item with-dropdown">
            <a href="{{ route('features') }}" data-toggle="dropdown" class="dropdown-toggle nav__item-link {{ Request::routeIs('features') ? 'active' : '' }}">Features</a>
            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <ul class="dropdown-menu">
              <li class="nav__item"><a href="{{ route('requestQuote') }}" class="nav__item-link">Request a Quote</a></li>
              <li class="nav__item"><a href="track-shipment.html" class="nav__item-link">Track and Trace</a></li>
              <li class="nav__item"><a href="find-location.html" class="nav__item-link">Find Location</a></li>
              <li class="nav__item"><a href="rates.html" class="nav__item-link">Rates &amp; Pricing</a></li>
              <li class="nav__item"><a href="faqs.html" class="nav__item-link">Help and FAQs</a></li>
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item --> --}}
          <li class="nav__item">
            <a href="{{ route('contactUs') }}" class="nav__item-link {{ Request::routeIs('contactUs') ? 'active' : '' }}">Contacts</a>
          </li><!-- /.nav-item -->
        </ul><!-- /.navbar-nav -->
      </div><!-- /.navbar-collapse -->
      <div class="navbar-modules">
        <ul class="modules__wrapper d-flex align-items-center list-unstyled">
          <li>
            {{-- <a href="#" class="module__btn module__btn-search"><i class="fa fa-search"></i></a> --}}
          </li>
          <li class="d-none d-lg-block">
            <a href="{{ route('requestQuote') }}" class="module__btn btn__request btn {{ Request::routeIs('requestQuote') ? 'active' : '' }}">
              <span>Request A Quote</span><i class="icon-arrow-right"></i>
            </a>
          </li>
          {{-- <li>
            <div class="dropdown">
              <button class="module__btn dropdown-toggle" id="langDrobdown" data-toggle="dropdown">
                <span>En</span>
              </button>
              <div class="dropdown-menu" aria-labelledby="langDrobdown">
                <a class="dropdown-item" href="#">
                  <img src="{{ asset('frontend/assets/images/flags/united-states.png') }}" alt="us"><span>Us</span>
                </a>
                <a class="dropdown-item" href="#">
                  <img src="{{ asset('frontend/assets/images/flags/germany.png') }}" alt="germany"><span>Germany</span>
                </a>
              </div>
            </div>
          </li> --}}
        </ul><!-- /.modules-wrapper -->
      </div><!-- /.navbar-modules -->
    </div><!-- /.container -->
  </nav><!-- /.navbar -->
</header><!-- /.Header -->
