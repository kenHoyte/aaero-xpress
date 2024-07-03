@extends('frontend.layouts.main')
@section('content')
     <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title page-title-layout4 text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="{{asset('frontend/assets/images/1_3.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
            <span class="pagetitle__subheading">Affordable Price, Certified Forwarders</span>
            <h1 class="pagetitle__heading">Advanced Supply Chain Technology &amp; Customized Logistics Solutions!</h1>
          </div><!-- /.col-xl-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->
    
    <!-- ========================
      About 2
    =========================== -->
    <section id="about2" class="about about-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading heading-3 mb-20 pt-60">
              <span class="heading__subtitle">Supply Chain Solutions for Seamless Logistics</span>
              <h2 class="heading__title">Efficient Shipping Services from US to Ghana</h2>
              <p>AeroExpress specializes in providing reliable shipping solutions from the United States to Ghana. We leverage advanced supply chain technology and personalized logistics strategies to ensure swift and secure delivery of goods.</p>
            </div><!-- /.heading -->
            <ul class="list-items list-items-layout2 list-unstyled mb-30">
              <li>Transparent Pricing and Environmental Sensitivity</li>
              <li>24/7 Customer Support with Professional Assistance</li>
              <li>Real-Time Shipment Tracking for Peace of Mind</li>
              <li>Secure Warehouse Storage and Tailored Solutions</li>
            </ul>
            <a href="#" class="btn btn__primary mr-30 mb-20">Learn More About Us</a>
            <a href="#" class="btn btn__secondary btn__link btn__underlined mb-20">Find Your Shipping Solution</a>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-9 col-lg-6">
            <div class="about__img">
              <img src="{{asset('frontend/assets/images/1_1.jpg')}}" alt="about img" class="img-fluid">
              <div class="counter-item-wrapper counters-white">
                <div class="counter-item">
                  <div class="counter__icon">
                    <i class="icon-box"></i>
                  </div>
                  <h4><span class="counter">6,154</span></h4>
                  <p class="counter__desc">Delivered Goods</p>
                </div>
              </div><!-- /.counter-item-wrapper-->
            </div><!-- /.about-img -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About 2 -->
    
  
    <section id="banner3" class="banner banner-3 p-0 bg-theme">
      <div class="container-fluid col-padding-0">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 background-banner bg-overlay">
            <div class="bg-img"><img src="{{asset('frontend/assets/images/banners/7.jpg')}}" alt="background"></div>
            <div class="video__btn video__btn-white video__btn-right-center">
              <a class="popup-video" href="https://www.youtube.com/watch?4=&amp;v=TKnufs85hXk">
                <span class="video__player-animation"></span>
                <span class="video__player-animation video__player-animation-2"></span>
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
              </a>
            </div><!-- /.video -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="inner-padding">
              <div class="heading heading-3 heading-white mb-50">
                <h2 class="heading__title">Premium Shipping Solutions <br>&amp; Unmatched Experience!</h2>
                <p class="heading__desc">We are committed to delivering exceptional shipping solutions that exceed the expectations of our clients worldwide. Our dedication to innovation and continuous improvement drives our success in the global transportation industry.</p>
              </div><!-- /.heading -->
              <div class="counters-white d-flex flex-wrap justify-content-between">
                <div class="counter-item">
                  <h4><span class="counter">3,214</span><span>m</span></h4>
                  <p class="counter__desc">Clients Worldwide</p>
                </div>
                <div class="counter-item">
                  <h4><span class="counter">5,154</span><span>m</span></h4>
                  <p class="counter__desc">Delivered Goods</p>
                </div>
                <div class="counter-item">
                  <h4><span class="counter">8,845</span><span>m</span></h4>
                  <p class="counter__desc">Miles Driven</p>
                </div>
              </div><!-- /.counters -->
              <p class="color-white mb-20">We provide top-notch transport and shipping services worldwide. Our skilled team leverages cutting-edge technology and decades of experience to ensure reliable and efficient logistics solutions.</p>
              <img src="{{asset('frontend/assets/images/about/signature2.png')}}" alt="signature">
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.banner 3 -->
  
      <!-- ======================
             projects Carousel
        ========================= -->
      {{-- <section id="projectsCarousel" class="projects-carousel">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading text-center mb-50">
                <span class="heading__subtitle">Latest Case Studies</span>
                <h2 class="heading__title">Featured Projects</h2>
                <p class="heading__desc">We presents the following case studies that exemplify the type of solutions and
                  services we are providing across our customer base.</p>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2" data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                <div class="project-item">
                  <div class="project__img">
                    <img src="{{asset('frontend/assets/images/1.jpg')}}" alt="project img">
                    <div class="project__cat">
                      <a href="#">Analystics</a><a href="#">Optimization</a>
                    </div><!-- /.project-cat -->
                  </div><!-- /.project-img -->
                  <div class="project__content">
                    <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                    <p class="project__desc">We understand that data is the greatest asset when it comes to
                      analyzing and optimizing your supply chain performance.</p>
                    <a href="#" class="btn btn__secondary btn__link">
                      <span>Read More</span><i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.project-content -->
                </div><!-- /.project-item -->
                <div class="project-item">
                  <div class="project__img">
                    <img src="{{asset('frontend/assets/images/2.jpg')}}" alt="project img">
                    <div class="project__cat">
                      <a href="#">Warehousing</a><a href="#">Distribution</a>
                    </div><!-- /.project-cat -->
                  </div><!-- /.project-img -->
                  <div class="project__content">
                    <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                    <p class="project__desc">We understand that data is the greatest asset when it comes to
                      analyzing and optimizing your supply chain performance.</p>
                    <a href="#" class="btn btn__secondary btn__link">
                      <span>Read More</span><i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.project-content -->
                </div><!-- /.project-item -->
                <div class="project-item">
                  <div class="project__img">
                    <img src="{{asset('frontend/assets/images/3.jpg')}}" alt="project img">
                    <div class="project__cat">
                      <a href="#">Logistics</a><a href="#">Analytics</a>
                    </div><!-- /.project-cat -->
                  </div><!-- /.project-img -->
                  <div class="project__content">
                    <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                    <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                      spend by utilizing an extensive .</p>
                    <a href="#" class="btn btn__secondary btn__link">
                      <span>Read More</span><i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.project-content -->
                </div><!-- /.project-item -->
                <div class="project-item">
                  <div class="project__img">
                    <img src="{{asset('frontend/assets/images/4.jpg')}}" alt="project img">
                    <div class="project__cat">
                      <a href="#">Optimization</a><a href="#">Warehousing</a>
                    </div><!-- /.project-cat -->
                  </div><!-- /.project-img -->
                  <div class="project__content">
                    <h4 class="project__title"><a href="#">Regulatory Compliance</a></h4>
                    <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                      spend by utilizing an extensive .</p>
                    <a href="#" class="btn btn__secondary btn__link">
                      <span>Read More</span><i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.project-content -->
                </div><!-- /.project-item -->
              </div><!-- /.carousel -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.projects-carousel -->
  
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
      </section><!-- /.clients 1 --> --}}
  
      <!-- ========================= 
            Testimonial #2
      =========================  -->
      <section id="testimonial2" class="testimonial testimonial-2 text-center bg-overlay bg-overlay-grdient-theme pb-90">
        <div class="bg-img"><img src="{{asset('frontend/assets/images/7_1.jpg')}}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading heading-white mb-30">
                <span class="heading__subtitle color-heading">What Our Customers Say!</span>
                <h2 class="heading__title">Testimonials</h2>
                <p class="heading__desc">See what our valued customers have to say about our shipping services. We are committed to delivering excellence!</p>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="carousel owl-carousel carousel-dots carousel-dots-white" data-slide="3" data-slide-md="2" data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                <!-- Testimonial #1 -->
                <div class="testimonial-item">
                  <div class="testimonial__thumb">
                    <img src="{{asset('frontend/assets/images/2_1.jpg')}}" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div class="testimonial__content">
                    <p class="testimonial__desc">AeroExpress has made shipping from the US to Ghana seamless and reliable. Their attention to detail and customer service is unmatched!</p>
                  </div><!-- /.testimonial-content -->
                  <div class="testimonial__meta">
                    <img src="{{asset('frontend/assets/images/signature2.png')}}" alt="signature">
                    <p class="testimonial__meta-desc">John Doe, CEO of Example Company</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /.testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item">
                  <div class="testimonial__thumb">
                    <img src="{{asset('frontend/assets/images/1_2.jpg')}}" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div class="testimonial__content">
                    <p class="testimonial__desc">I highly recommend AeroExpress for their professionalism and efficient shipping solutions. They deliver on their promises with excellence!</p>
                  </div><!-- /.testimonial-content -->
                  <div class="testimonial__meta">
                    <img src="{{asset('frontend/assets/images/signature.png')}}" alt="signature">
                    <p class="testimonial__meta-desc">Jane Smith, CFO of Another Company</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /.testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item">
                  <div class="testimonial__thumb">
                    <img src="{{asset('frontend/assets/images/3_1.jpg')}}" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div class="testimonial__content">
                    <p class="testimonial__desc">Choosing AeroExpress was the best decision for our logistics needs. They provide reliable service with a personal touch!</p>
                  </div><!-- /.testimonial-content -->
                  <div class="testimonial__meta">
                    <img src="{{asset('frontend/assets/images/signature3.png')}}" alt="signature">
                    <p class="testimonial__meta-desc">Michael Brown, Operations Manager</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /.testimonial-item -->
              </div><!-- /.carousel -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.testimonial2 -->
      
  
      <!-- ======================
        Blog Grid
      ========================= -->
      {{-- <section id="blogGrid" class="blog blog-grid pb-60">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading text-center mb-50">
                <span class="heading__subtitle">Insight and Trends</span>
                <h2 class="heading__title">Recent Articles</h2>
                <p class="heading__desc">Follow our latest news and thoughts which focuses exclusively on insight,
                  industry trends, top news headlines.</p>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <!-- Blog Item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="blog-item">
                <div class="blog__img">
                  <a href="#">
                    <img src="{{asset('frontend/assets/images/1_4.jpg')}}" alt="blog image">
                  </a>
                </div><!-- /.entry-img -->
                <div class="blog__content">
                  <div class="blog__meta">
                    <div class="blog__meta-cat">
                      <a href="#">Insights</a><a href="#">Management</a>
                    </div><!-- /.blog-meta-cat -->
                  </div><!-- /.blog-meta -->
                  <h4 class="blog__title"><a href="#">Importers achieve cost savings through the First Sale rule!</a></h4>
                  <span class="blog__meta-date">Jan 20, 2019</span>
                  <p class="blog__desc">The trade war currently ensuing between the US and several nations around the
                    globe, most fiercely with China, shows no signs of the first set of tariffs levied against solar...
                  </p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <span>Read More</span><i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.entry-content -->
              </div><!-- /.blog-item -->
            </div><!-- /.col-lg-4 -->
            <!-- Blog Item #2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="blog-item">
                <div class="blog__img">
                  <a href="#">
                    <img src="{{asset('frontend/assets/images/2_2.jpg')}}" alt="blog image">
                  </a>
                </div><!-- /.entry-img -->
                <div class="blog__content">
                  <div class="blog__meta">
                    <div class="blog__meta-cat">
                      <a href="#">Warehousing</a><a href="#">Industry</a>
                    </div><!-- /.blog-meta-cat -->
                  </div><!-- /.blog-meta -->
                  <h4 class="blog__title"><a href="#">Cargo flow through better supply chain visibility, control.</a></h4>
                  <span class="blog__meta-date">Oct 18, 2019</span>
                  <p class="blog__desc">Global provider connected products for consumers, and enterprises worldwide,
                    supply chain control is everything, provide visibility and traceability needed for...</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <span>Read More</span><i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.entry-content -->
              </div><!-- /.blog-item -->
            </div><!-- /.col-lg-4 -->
            <!-- Blog Item #3 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="blog-item">
                <div class="blog__img">
                  <a href="#">
                    <img src="{{asset('frontend/assets/images/3_2.jpg')}}" alt="blog image">
                  </a>
                </div><!-- /.entry-img -->
                <div class="blog__content">
                  <div class="blog__meta">
                    <div class="blog__meta-cat">
                      <a href="#">Logistics</a><a href="#">Distribution</a>
                    </div><!-- /.blog-meta-cat -->
                  </div><!-- /.blog-meta -->
                  <h4 class="blog__title"><a href="#">Importance of specialized focus in Projects, Oil &amp; Gas
                      Logistics?</a></h4>
                  <span class="blog__meta-date">Jan 20, 2019</span>
                  <p class="blog__desc">Our team provides highly skilled &amp; experienced project managers who know the
                    intricacies of this vertical and focus on providing innovative solutions in Oil &amp; Gas sector...</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <span>Read More</span><i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.entry-content -->
              </div><!-- /.blog-item -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section> --}}
      <!-- /.blog Grid -->
  
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
              <!-- US Office -->
              <div class="accordion-item">
                <div class="accordion__item-header opened" data-toggle="collapse" data-target="#collapse1">
                  <a class="accordion__item-title" href="#">US Office</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse1" class="collapse  show" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <ul class="contact__list list-unstyled">
                      <li>001-123-456-789</li>
                      <li>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6a0605070c0e0d1a3d1a1a021f0d073b1c000c0e">[email&#160;protected]</a></li>
                      <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                      <li>Hours: Mon-Fri: 8am – 7pm</li>
                    </ul>
                  </div><!-- /.accordion-item-body -->
                </div><!-- /#collapse1 -->
              </div><!-- /.accordion-item -->
        
              <!-- Ghana Office -->
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                  <a class="accordion__item-title" href="#">Ghana Office</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse2" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <ul class="contact__list list-unstyled">
                      <li>+233 20 123 4567</li>
                      <li>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b2ded3ded8d3cad8d2d2c1c2d4d7f0c7d7dfd6a7d0ded6">[email&#160;protected]</a></li>
                      <li>Address: 1234 Ring Road Central, Accra, Ghana</li>
                      <li>Hours: Mon-Fri: 8am – 7pm</li>
                    </ul>
                  </div><!-- /.accordion-item-body -->
                </div><!-- /#collapse2 -->
              </div><!-- /.accordion-item -->
            </div><!-- /#accordion -->
          </div><!-- /.contact-panel -->
        </div><!-- /.container -->
        
      </section><!-- /.contact 1 -->
@endsection


 