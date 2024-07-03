@extends('frontend.layouts.main')
@section('content')
<section id="page-title" class="page-title page-title-layout2 bg-overlay bg-parallax">
  <div class="bg-img"><img src="{{asset('frontend/assets/images/7.jpg')}}" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-8">
        <h1 class="pagetitle__heading">Reliable Shipping from US to Ghana</h1>
        <p class="pagetitle__desc">Efficient logistics solutions tailored for your shipments to Ghana.</p>
        <a href="#" class="btn btn__white">Contact Us</a>
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ========================
    Services
=========================== -->
<section id="services" class="services pb-80">
  <div class="container">
    <div class="row heading heading-2 mb-40">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <span class="heading__subtitle">Real Solutions, Real Fast!</span>
      </div><!-- /.col-lg-12 -->
      <div class="col-sm-12 col-md-12 col-lg-6">
        <h2 class="heading__title">Our Shipping Services to Ghana</h2>
      </div><!-- /.col-lg-6 -->
      <div class="col-sm-12 col-md-12 col-lg-6 ">
        <p class="heading__desc">Explore our comprehensive shipping solutions from the US to Ghana, ensuring timely and secure delivery of your goods.</p>
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <div class="row text-center">
      <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__icon"><i class="icon-air-freight"></i></div>
          <div class="service__content">
            <h4 class="service__title">Air Freight</h4>
            <p class="service__desc">Fast and reliable air freight services tailored for urgent shipments to Ghana.</p>
            <a href="#" class="btn btn__white">
              <span>Read More</span><i class="icon-arrow-right"></i>
            </a>
          </div>
        </div><!-- /.service-item -->
      </div><!-- /.col-lg-4 -->
      <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__icon"><i class="icon-cargo-ship"></i></div>
          <div class="service__content">
            <h4 class="service__title">Ocean Freight</h4>
            <p class="service__desc">Efficient sea freight solutions ensuring cost-effective shipments to Ghana.</p>
            <a href="#" class="btn btn__white">
              <span>Read More</span><i class="icon-arrow-right"></i>
            </a>
          </div>
        </div><!-- /.service-item -->
      </div><!-- /.col-lg-4 -->
      <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__icon"><i class="icon-truck"></i></div>
          <div class="service__content">
            <h4 class="service__title">Road Freight</h4>
            <p class="service__desc">Reliable road freight services connecting the US to Ghana seamlessly.</p>
            <a href="#" class="btn btn__white">
              <span>Read More</span><i class="icon-arrow-right"></i>
            </a>
          </div>
        </div><!-- /.service-item -->
      </div><!-- /.col-lg-4 -->
      <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__icon"><i class="icon-forklift"></i></div>
          <div class="service__content">
            <h4 class="service__title">Warehousing</h4>
            <p class="service__desc">We provides with the main types of basic conditions International sea
              transportation is implemented by our partners’ vessels, the largest ocean carriers.</p>
            <a href="#" class="btn btn__white">
              <span>Read More</span><i class="icon-arrow-right"></i>
            </a>
          </div>
        </div><!-- /.service-item -->
      </div><!-- /.col-lg-4 -->
      <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__icon"><i class="icon-conveyor"></i></div>
          <div class="service__content">
            <h4 class="service__title">Supply Chain</h4>
            <p class="service__desc">We provides with the main types of basic conditions International sea
              transportation is implemented by our partners’ vessels, the largest ocean carriers.</p>
            <a href="#" class="btn btn__white">
              <span>Read More</span><i class="icon-arrow-right"></i>
            </a>
          </div>
        </div><!-- /.service-item -->
      </div><!-- /.col-lg-4 -->
      <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__icon"><i class="icon-box-2"></i></div>
          <div class="service__content">
            <h4 class="service__title">Packaging</h4>
            <p class="service__desc">We provides with the main types of basic conditions International sea
              transportation is implemented by our partners’ vessels, the largest ocean carriers.</p>
            <a href="#" class="btn btn__white">
              <span>Read More</span><i class="icon-arrow-right"></i>
            </a>
          </div>
        </div><!-- /.service-item -->
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /#services -->

    {{-- <section id="services" class="services pb-80">
      <div class="container">
        <div class="row heading heading-2 mb-40">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="heading__subtitle">Real Solutions, Real Fast!</span>
          </div><!-- /.col-lg-12 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <h2 class="heading__title">Delivering the Best Global Logistics Solutions.</h2>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 ">
            <p class="heading__desc">Our global logistics expertise, advanced supply chain technology &amp; customized
              logistics solutions will help you analyze, develop and implement successful supply chain management
              strategies.</p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row text-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__icon"><i class="icon-air-freight"></i></div>
              <div class="service__content">
                <h4 class="service__title">Air Freight</h4>
                <p class="service__desc">We can arrange and provides with the comprehensive service in the sphere of
                  urgent, valuable, fragile or any cargoes conscientious accelerated delivery by air.</p>
                <a href="#" class="btn btn__white">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__icon"><i class="icon-cargo-ship"></i></div>
              <div class="service__content">
                <h4 class="service__title">Ocean Freight</h4>
                <p class="service__desc">We provides with the main types of basic conditions International sea
                  transportation is implemented by our partners’ vessels, the largest ocean carriers.</p>
                <a href="#" class="btn btn__white">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__icon"><i class="icon-truck"></i></div>
              <div class="service__content">
                <h4 class="service__title">Road Freight</h4>
                <p class="service__desc">We provides with the main types of basic conditions International sea
                  transportation is implemented by our partners’ vessels, the largest ocean carriers.</p>
                <a href="#" class="btn btn__white">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__icon"><i class="icon-forklift"></i></div>
              <div class="service__content">
                <h4 class="service__title">Warehousing</h4>
                <p class="service__desc">We provides with the main types of basic conditions International sea
                  transportation is implemented by our partners’ vessels, the largest ocean carriers.</p>
                <a href="#" class="btn btn__white">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__icon"><i class="icon-conveyor"></i></div>
              <div class="service__content">
                <h4 class="service__title">Supply Chain</h4>
                <p class="service__desc">We provides with the main types of basic conditions International sea
                  transportation is implemented by our partners’ vessels, the largest ocean carriers.</p>
                <a href="#" class="btn btn__white">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__icon"><i class="icon-box-2"></i></div>
              <div class="service__content">
                <h4 class="service__title">Packaging</h4>
                <p class="service__desc">We provides with the main types of basic conditions International sea
                  transportation is implemented by our partners’ vessels, the largest ocean carriers.</p>
                <a href="#" class="btn btn__white">
                  <span>Read More</span><i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services --> --}}

    <!-- ======================
           banner 1
      ========================= -->
    <section id="banner1" class="banner banner-1 p-0 bg-gray">
      <div class="container-fluid col-padding-0">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="inner-padding">
              <div class="heading heading-3 mb-30">
                <i class="icon-tag"></i>
                <span class="heading__subtitle">Affordable Price, Certified Forwarders</span>
                <h2 class="heading__title">Safe, Reliable &amp; Express Logistic Solutions That Saves Your Time!</h2>
                <p class="heading__desc">We pride ourselves on providing the best transport and shipping services
                  available allover the world. Our skilled personnel, utilising the latest communications, tracking and
                  processing software, combined with decades of experience.</p>
              </div><!-- /.heading -->
              <a href="#" class="btn btn__primary">Schedule An Appointment</a>
            </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6 bg-overlay  background-banner">
            <div class="bg-img"><img src="{{asset('frontend/assets/images/1_1.jpg')}}" alt="background"></div>
            <div class="skills skills-panel">
              <div class="heading mb-30">
                <h2 class="heading__title">What We Achieved!</h2>
                <p class="heading__desc">Fulfill our dedicated promise to deliver innovative &amp; dynamic solutions to our
                  customers to fit their needs.</p>
              </div><!-- /.heading -->
              <!-- progress 1 -->
              <div class="progress-item">
                <h6 class="progress__title">Warehousing</h6>
                <span class="progress__percentage"></span>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                  </div>
                </div><!-- /.progress -->
              </div><!-- /.progress-item  -->
              <!-- progress 2 -->
              <div class="progress-item">
                <h6 class="progress__title">Air Freight</h6>
                <span class="progress__percentage"></span>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                  </div>
                </div><!-- /.progress -->
              </div><!-- /.progress-item  -->
              <!-- progress 3 -->
              <div class="progress-item">
                <h6 class="progress__title">Ocean Freight</h6>
                <span class="progress__percentage"></span>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                  </div>
                </div><!-- /.progress -->
              </div><!-- /.progress-item  -->
              <!-- progress 4 -->
              <div class="progress-item">
                <h6 class="progress__title">Road Freight</h6>
                <span class="progress__percentage"></span>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                  </div>
                </div><!-- /.progress -->
              </div><!-- /.progress-item  -->
              <!-- progress 8 -->
              <div class="progress-item">
                <h6 class="progress__title">Supply Chain</h6>
                <span class="progress__percentage"></span>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                  </div>
                </div><!-- /.progress -->
              </div><!-- /.progress-item  -->
            </div><!-- /.skills -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.banner 1 -->

    <!-- ========================= 
            Testimonial #1
    =========================  -->
    <section id="testimonial" class="testimonial testimonial-1 text-center pb-70">
      <div class="bg-img"><img src="{{asset('frontend/assets/images/2.png')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading mb-50">
              <span class="heading__subtitle">What Peoples Say!</span>
              <h2 class="heading__title">Testimonials</h2>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
            <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1" data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800">
              <!-- Testimonial #1 -->
              <div class=" testimonial-item">
                <div class="testimonial__thumb">
                  <img src="{{asset('frontend/assets/images/1.jpg')}}" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__content">
                  <p class="testimonial__desc">They are the best of the best, and expertly trained team members who take
                    the extra step and go the extra mile, all to fulfill our dedicated promise to deliver innovative and
                    dynamic solutions to our customers to fit the needs of a rapidly changing global environment.</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <img src="{{asset('frontend/assets/images/signature.png')}}" alt="signature">
                  <p class="testimonial__meta-desc">The Move Inc</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial #2 -->
              <div class=" testimonial-item">
                <div class="testimonial__thumb">
                  <img src="{{asset('frontend/assets/images/1.jpg')}}" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__content">
                  <p class="testimonial__desc">Logisti team is the best of the best, and expertly trained team members
                    who take the extra step and go the extra mile, all to fulfill our dedicated promise to deliver
                    innovative and dynamic solutions to our customers to fit the needs of a rapidly changing global
                    environment.</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <img src="{{asset('frontend/assets/images/signature.png')}}" alt="signature">
                  <p class="testimonial__meta-desc">The Move Inc</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
            </div>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.testimonial1 -->

    <!-- =====================
       Clients 1
    ======================== -->
    <section id="clients" class="clients clients-1 border-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">
              <div class="client">
                <a href="#"><img src="{{asset('frontend/assets/images/9.png')}}" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="{{asset('frontend/assets/images/10.png')}}" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="{{asset('frontend/assets/images/11.png')}}" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="{{asset('frontend/assets/images/12.png')}}" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="{{asset('frontend/assets/images/13.png')}}" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="{{asset('frontend/assets/images/11.png')}}" alt="client"></a>
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.clients 1 -->

    <!-- ========================= 
            contact 1
      =========================  -->
    <section id="contact1" class="contact contact-1 p-0">
      <div id="map"></div>
      <script src="{{asset('frontend/assets/js/google-map.js')}}"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqrqPZOVegy1VIdyIcndxZY9YGoK-x0Yo&amp;callback=initMap" async="" defer=""></script>
      <div class="container">
        <div class="contact-panel contact-panel-2">
          <div class="contact__panel-header d-flex align-items-center">
            <h4 class="contact__panel-title">Global Locations</h4>
          </div>
          <div id="accordion">
            <div class="accordion-item">
              <div class="accordion__item-header opened" data-toggle="collapse" data-target="#collapse1">
                <a class="accordion__item-title" href="#">London Office</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse1" class="collapse  show" data-parent="#accordion">
                <div class="accordion__item-body">
                  <ul class="contact__list list-unstyled">
                    <li>002 010123456789</li>
                    <li>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="35795a525c46415c75025a475a5a531b565a58">[email&nbsp;protected]</a></li>
                    <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                    <li>Hours: Mon-Fri: 8am – 7pm</li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                <a class="accordion__item-title" href="#">Berlin Office</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse2" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <ul class="contact__list list-unstyled">
                    <li>002 010123456789</li>
                    <li>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3b77545c52484f527b0c544954545d15585456">[email&nbsp;protected]</a></li>
                    <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                    <li>Hours: Mon-Fri: 8am – 7pm</li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                <a class="accordion__item-title" href="#">Manchester Office</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse3" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <ul class="contact__list list-unstyled">
                    <li>002 010123456789</li>
                    <li>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="75391a121c06011c35421a071a1a135b161a18">[email&nbsp;protected]</a></li>
                    <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                    <li>Hours: Mon-Fri: 8am – 7pm</li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
          </div>
        </div><!-- /.contact-panel -->
      </div><!-- /.container -->
    </section><!-- /.contact -->
@endsection