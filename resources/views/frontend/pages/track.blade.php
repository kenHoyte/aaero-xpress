@extends('frontend.layouts.main')
@section('content')
    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="{{asset('frontend/assets/images/14.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading">Track &amp; Trace</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Features</a></li>
                <li class="breadcrumb-item active" aria-current="page">Track &amp; Trace</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
       Track Shipmeent
    ========================= -->
    <section id="trackShipmeent" class="track-shipmeent pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar mb-30">
              <div class="widget widget-categories">
                <h5 class="widget__title">Transport Services</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                    <li><a href="#">Warehousing</a></li>
                    <li><a href="#" class="active">Air Freight </a></li>
                    <li><a href="#">Ocean Freight</a></li>
                    <li><a href="#">Road Freight</a></li>
                    <li><a href="#">Supply Chain</a></li>
                    <li><a href="#">Packaging Options</a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->
              <div class="widget widget-help bg-overlay bg-overlay-grdient-secondary">
                <div class="bg-img"><img src="{{asset('frontend/assets/images/1.jpg')}}" alt="background"></div>
                <div class="widget__content">
                  <h5>How Can <br> We Help You!</h5>
                  <p>We understand the importance approaching each work integrally and believe in the power of simple
                    and easy communication.</p>
                  <a href="#" class="btn btn__primary btn__hover2 btn__block">Schedule An Appointment</a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-help -->
              <div class="widget widget-download bg-theme">
                <h5 class="widget__title color-white">Download Brochures</h5>
                <div class="widget__content">
                  <a href="#" class="btn btn__secondary btn__block mb-20">
                    <img src="{{asset('frontend/assets/images/pdf.png')}}" alt="pdf">
                    <span>2020 Brochure</span>
                  </a>
                  <a href="#" class="btn btn__secondary btn__block">
                    <img src="{{asset('frontend/assets/images/pdf.png')}}" alt="pdf">
                    <span>Presentation Brochure</span>
                  </a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-download -->

            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <form>
              <div class="row mb-30">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <p class="fz-16 mb-45">Need dependable, cost effective transportation of your commodities? Fill out
                    our easy Quote Request Form below to get a fast quote on your job.</p>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group mb-40">
                    <label>Shipment Type</label>
                    <div class="form-group form-group-select">
                      <select class="form-control">
                        <option>Packaging</option>
                        <option>Packaging 1</option>
                        <option>Packaging 2</option>
                      </select>
                    </div>
                  </div>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <label>Tracking Number</label>
                    <div class="form-group">
                      <textarea class="form-control" placeholder="You can enter up to a maximum of 10 airway bill numbers for tracking."></textarea>
                    </div>
                  </div>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap">
                  <div class="form-group input-radio mr-30">
                    <label class="label-radio">Air Freight
                      <input type="radio" name="access" checked="">
                      <span class="radio-indicator"></span>
                    </label>
                  </div>
                  <div class="form-group input-radio mr-30">
                    <label class="label-radio">Ocean Freight
                      <input type="radio" name="access">
                      <span class="radio-indicator"></span>
                    </label>
                  </div>
                  <div class="form-group input-radio mr-30">
                    <label class="label-radio">Road Freight
                      <input type="radio" name="access">
                      <span class="radio-indicator"></span>
                    </label>
                  </div>
                  <div class="form-group input-radio">
                    <label class="label-radio">Express Delivery
                      <input type="radio" name="access">
                      <span class="radio-indicator"></span>
                    </label>
                  </div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <button type="submit" class="btn btn__secondary btn__block">Track &amp; Trace</button>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Track Shipmeent -->

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
                    <li>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="55193a323c26213c15623a273a3a337b363a38">[email&nbsp;protected]</a></li>
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
                    <li>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4e022129273d3a270e79213c212128602d2123">[email&nbsp;protected]</a></li>
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
                    <li>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8bc7e4ece2f8ffe2cbbce4f9e4e4eda5e8e4e6">[email&nbsp;protected]</a></li>
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