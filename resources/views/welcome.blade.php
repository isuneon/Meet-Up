@extends('layouts.app')
@section('content')

<body id="top" data-spy="scroll" data-target="#materialize-menu" data-offset="100">

      <header id="header" class="tt-nav">
        <div class="header-sticky light-header nav-boxed-color">
          <div class="container">
            <div id="materialize-menu" class="menuzord">

             
              <img class="retina" src="assets/img/logo.png" alt="">
             


              <ul class="nav menuzord-menu pull-right op-nav">
                <li>
                <a href="#home" data-scroll>Incio</a>
                </li>
                <li>
                <a href="#about" data-scroll>A cerca de</a>
                </li>
                <li>
                <a href="#feature" data-scroll>Precios</a>
                </li>
                <li>
                <a href="#review" data-scroll>Ayuda</a>
                </li>
                <li>
                <a href="{{ route('login') }}" data-scroll>Acceder</a>
                </li>
               
              </ul>

            </div>
          </div>
        </div>
      </header>


      <section id="home" class="padding-top-110 dark-bg">
      <div class="container">
      <div class="text-center">
      <h1 class="intro-title text-capitalize white-text">materialize</h1>
      <span class="sub-intro white-text">Specialising in customer experiences &amp; brand development, we combine digital craftsmanship with innovative thinking to deliver disruptive digital solutions on a worldwide scale.</span>

      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  
                      

                      
                          <form method="POST" action="{{ route('login') }}">
                              @csrf



                             <div class="form-group row mb-0">
                                  <div class="col-md-8 offset-md-4">
                                    <a class="btn btn-info" href="redirect">
                                        Sign in with  meetup
                                      </a>
                                      
                                  </div>
                              </div>
                          </form>
                     
                  
              </div>
          </div>
      </div>
      </div>
      <div class="text-center mocup-wrapper">
      <img src="assets/img/mockup/app.png" alt="">
      </div>
      </div>
      </section>
      <section class="padding-top-110">
      <div class="container">
      <div class="text-center mb-80">
      <h2 class="section-title text-uppercase">materialize Have</h2>
      <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
      </div>
      <div class="row no-gutter">
      <div class="col-md-3 col-sm-6">
      <div class="featured-box brand-bg text-center z-depth-1">
      <div class="featured-wrapper">
      <div class="intro-header">
      <i class="material-icons white-text">&#xE32A;</i>
      <h2 class="white-text">Fast and Secure</h2>
      </div>
      <div class="content white-text">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.</p>
      </div>
      </div>
      </div>
      </div>
      <div class="col-md-3 col-sm-6">
      <div class="featured-box pink text-center z-depth-1">
      <div class="featured-wrapper">
      <div class="intro-header">
      <i class="material-icons white-text">&#xE55F;</i>
      <h2 class="white-text">GPS Tracking</h2>
      </div>
      <div class="content white-text">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.</p>
      </div>
      </div>
      </div>
      </div>
      <div class="col-md-3 col-sm-6">
      <div class="featured-box brand-bg text-center z-depth-1">
      <div class="featured-wrapper">
      <div class="intro-header">
      <i class="material-icons white-text">&#xE31D;</i>
      <h2 class="white-text">Voice Assistant</h2>
       </div>
      <div class="content white-text">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.</p>
      </div>
      </div>
      </div>
      </div>
      <div class="col-md-3 col-sm-6">
      <div class="featured-box pink text-center z-depth-1">
      <div class="featured-wrapper">
      <div class="intro-header">
      <i class="material-icons white-text">&#xE855;</i>
      <h2 class="white-text">24/7 Support</h2>
      </div>
      <div class="content white-text">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.</p>
      </div>
      </div>
      </div>
      </div>
      </div>
      <div class="row padding-top-100">
      <div class="col-md-7">
      <h2 class="text-bold mb-30 text-capitalize">Apps you love</h2>
      <p>Quickly procrastinate functionalized human capital with equity invested experiences. Rapidiously provide access to extensible solutions after pandemic supply chains. Credibly supply resource sucking channels before areas Dynamically harness cooperative partnerships rather than just in time total linkage. Dramatically syndicate plug and play <a href="#">professional with focused</a>. Credibly supply resource sucking channels before areas.</p>
      <p>Lorem ipsum dolor sit amet cr adipiscing elit. In maximus ligula semper <a href="#">metus pellentesque</a> mattis.</p>
      </div>
      <div class="col-md-5">
      <img src="assets/img/mockup/mac.png" class="img-responsive " alt="Image">
      </div>
      </div>
      </div>
      <div class="mocup-wrapper text-center">
      <img src="assets/img/mockup/landscap-mockup.jpg" alt="image">
      </div>
      </section>
      <section class="padding-top-110 padding-bottom-70 brand-bg">
      <div class="container">
      <div class="row">
      <div class="col-md-8 col-md-offset-2">
      <div class="quote-carousel text-center">
      <div class="carousel-item">
      <div class="content">
      <h2 class="white-text line-height-40">"My favorite things in life don't cost any money. It's really clear that the most precious resource we all have is time."</h2>
      <div class="testimonial-meta font-20 text-extrabold white-text">
      Steve Jobes
      </div>
      </div>
      </div>
      <div class="carousel-item">
      <div class="content">
      <h2 class="white-text line-height-40">"My favorite things in life don't cost any money. It's really clear that the most precious resource we all have is time."</h2>
      <div class="testimonial-meta font-20 text-extrabold white-text">
      Steve Jobes
      </div>
      </div>
      </div>
      <div class="carousel-item">
      <div class="content">
      <h2 class="white-text line-height-40">"My favorite things in life don't cost any money. It's really clear that the most precious resource we all have is time."</h2>
      <div class="testimonial-meta font-20 text-extrabold white-text">
      Steve Jobes
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </section>
      <section id="about" class="section-padding">
      <div class="container">
      <div class="text-center mb-80">
      <h2 class="section-title text-uppercase">About Materialize</h2>
      <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
      </div>
      <div class="vertical-tab">
      <div class="row">
      <div class="col-sm-3">

      <ul class="nav nav-tabs nav-stacked" role="tablist">
      <li role="presentation" class="active"><a href="#tab-5" class="waves-effect waves-light" role="tab" data-toggle="tab">Designed For You</a></li>
      <li role="presentation"><a href="#tab-6" class="waves-effect waves-light" role="tab" data-toggle="tab">Innovative Idea</a></li>
      <li role="presentation"><a href="#tab-7" class="waves-effect waves-light" role="tab" data-toggle="tab">Modern Technology</a></li>
      <li role="presentation"><a href="#tab-8" class="waves-effect waves-light" role="tab" data-toggle="tab">Security First</a></li>
      <li role="presentation"><a href="#tab-9" class="waves-effect waves-light" role="tab" data-toggle="tab">Save Your Bills</a></li>
      </ul>
      </div>
      <div class="col-sm-9">

      <div class="panel-body">
      <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="tab-5">
      <h2>Designed For You</h2>
      <img class="alignright" src="assets/img/mockup/tab.png" alt="">
      <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient.</p>
      <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor.</p>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="tab-6">
      <h2>Innovative Idea</h2>
      <img class="alignright mt-20" src="assets/img/data.png" alt="">
      <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient.</p>
      <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor.</p>
      </div>
       <div role="tabpanel" class="tab-pane fade" id="tab-7">
      <h2>Modern Technology</h2>
      <img class="alignright" src="assets/img/busy_man.png" alt="">
      <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient.</p>
      <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor.</p>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="tab-8">
      <h2>Security First</h2>
      <img class="alignright" src="assets/img/working_man.png" alt="">
      <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient.</p>
      <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor.</p>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="tab-9">
      <h2>Save Your Bills</h2>
      <img class="alignright" src="assets/img/business.png" alt="">
      <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient.</p>
      <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor.</p>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </section>
      <section class="padding-top-100 border-tb gray-bg">
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-6 pl-100">
      <h2 class="text-bold mb-30">A little bit About Materialize</h2>
      <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <strong><a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a></strong> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient. Id ac dui libero a ullamcorper euismod himenaeos a nam condimentum a adipiscing dapibus lobortis iaculis morbi.</p>
      <p>Himenaeos a vestibulum morbi. <strong><a href="#">Ullamcorper cras scelerisque</a></strong> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor tempus a mi ad parturient ad nulla mus amet in penatibus nascetur at vulputate euismod a est tristique scelerisque. Aliquet facilisis nisl vel vestibulum dignissim gravida ullamcorper.</p>
      </div>
      <div class="col-md-6 mocup-wrapper-sm">
      <img src="assets/img/mockup/dashboard-screen.png" alt="">
      </div>
      </div>
      </div>
      </section>
      <section id="feature" class="section-padding">
      <div class="container">
      <div class="text-center mb-80">
      <h2 class="section-title text-uppercase">Awesome Features</h2>
      <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
      </div>
      <div class="row equal-height-row">
      <div class="col-md-4 mb-30">
      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
      <div class="icon">
      <i class="material-icons colored brand-icon">&#xE2BF;</i>
      </div>
      <div class="desc">
      <h2>Backup &amp; Restore</h2>
      <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
      </div>
      </div>
      </div>
      <div class="col-md-4 mb-30">
      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
      <div class="icon">
      <i class="material-icons colored brand-icon">&#xE55F;</i>
      </div>
      <div class="desc">
      <h2>GPS Tracking</h2>
      <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
      </div>
      </div>
      </div>
      <div class="col-md-4 mb-30">
      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
      <div class="icon">
      <i class="material-icons colored brand-icon">&#xE32A;</i>
      </div>
      <div class="desc">
      <h2>Security First</h2>
      <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
      </div>
      </div>
      </div>
      <div class="col-md-4">
      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
      <div class="icon">
      <i class="material-icons colored brand-icon">&#xE31D;</i>
      </div>
      <div class="desc">
      <h2>Voice Assistant</h2>
      <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
      </div>
      </div>
      </div>
      <div class="col-md-4">
      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
      <div class="icon">
      <i class="material-icons colored brand-icon">&#xE7FC;</i>
      </div>
      <div class="desc">
      <h2>Multiple Users</h2>
      <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
      </div>
      </div>
      </div>
      <div class="col-md-4">
      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
      <div class="icon">
      <i class="material-icons colored brand-icon">&#xE855;</i>
      </div>
      <div class="desc">
      <h2>24/7 Support</h2>
      <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
      </div>
      </div>
      </div>
      </div>
      </div>
      </section>
      <section id="review" class="section-padding brand-bg">
      <div class="container">
      <div class="row">
      <div class="col-md-8 col-md-offset-2">
      <div class="thumb-carousel circle-thumb text-center">
      <ul class="slides">
      <li data-thumb="assets/img/client-thumb/5.png">
      <div class="icon">
      <img src="assets/img/quote-dark.png" alt="Customer Thumb">
      </div>
      <div class="content white-text">
      <p>Quam adipiscing vestibulum feugiat lacus leo a eget leo convallis sagittis nisi varius eros a imperdiet.Dui elementum ut a vestibulum eu fames hendrerit class conubia consequat curae.</p>
      <div class="testimonial-meta">
      John Doe,
      <span class="white-text">User Interface Designer</span>
      </div>
      </div>
      </li>
      <li data-thumb="assets/img/client-thumb/2.png">
      <div class="icon">
      <img src="assets/img/quote-dark.png" alt="Customer Thumb">
      </div>
      <div class="content white-text">
      <p>Quam adipiscing vestibulum feugiat lacus leo a eget leo convallis sagittis nisi varius eros a imperdiet.Dui elementum ut a vestibulum eu fames hendrerit class conubia consequat curae.</p>
      <div class="testimonial-meta">
      Elita Karim,
      <span class="white-text">User Interface Designer</span>
      </div>
      </div>
      </li>
      <li data-thumb="assets/img/client-thumb/3.png">
      <div class="icon">
      <img src="assets/img/quote-dark.png" alt="Customer Thumb">
      </div>
      <div class="content white-text">
      <p>Quam adipiscing vestibulum feugiat lacus leo a eget leo convallis sagittis nisi varius eros a imperdiet.Dui elementum ut a vestibulum eu fames hendrerit class conubia consequat curae.</p>
      <div class="testimonial-meta">
      Tomas Udoya,
      <span class="white-text">User Interface Designer</span>
      </div>
      </div>
      </li>
      <li data-thumb="assets/img/client-thumb/4.png">
      <div class="icon">
      <img src="assets/img/quote-dark.png" alt="Customer Thumb">
      </div>
      <div class="content white-text">
      <p>Quam adipiscing vestibulum feugiat lacus leo a eget leo convallis sagittis nisi varius eros a imperdiet.Dui elementum ut a vestibulum eu fames hendrerit class conubia consequat curae.</p>
      <div class="testimonial-meta">
      Jonathon Bin,
      <span class="white-text">User Interface Designer</span>
      </div>
      </div>
      </li>
      </ul>
      </div>
      </div>
      </div>
      </div>
      </section>
      <section id="screenshot" class="section-padding">
      <div class="container">
      <div class="text-center mb-50">
      <h2 class="section-title text-uppercase">App screenshot</h2>
      <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
      </div>
      <div class="col-md-10 col-md-offset-1 screenshot-carousel-wrapper">
      <div class="device-mockup" data-device="ipad" data-color="white" data-orientation="landscape">
      <div class="device">
      <div class="screen">

      <div id="screenshot-carousel" class="carousel slide screenshot-carousel" data-ride="carousel">

      <div class="carousel-inner" role="listbox">
      <div class="item active">
      <img src="assets/img/mockup/screenshot-1.jpg" alt="" title="" />
      </div>
      <div class="item">
      <img src="assets/img/mockup/screenshot-1.jpg" alt="" title="" />
      </div>
      <div class="item">
      <img src="assets/img/mockup/screenshot-1.jpg" alt="" title="" />
      </div>
      </div>
      </div>

      </div>
      </div>
      </div>

      <a class="left carousel-control z-depth-2 pink" href="#screenshot-carousel" role="button" data-slide="prev">
      <span class="fa fa-angle-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control pink" href="#screenshot-carousel" role="button" data-slide="next">
      <span class="fa fa-angle-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
      </div>
      </div>
      </section>
      <section id="download" class="ptb-90 gray-bg">
      <div class="container">
      <div class="col-md-12">

      <div class="text-center">
      <h1 class="text-uppercase mb-30 text-extrabold font-30">Download the materialize app from play store</h1>
      <p class="width-60 mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
      <a href="#" class="btn btn-download pink waves-effect waves-light mt-20"><i class="fa fa-android left"></i> <span>Android <strong>Download</strong></span></a>
      </div>

      </div>
      </div>
      </section>
      <footer id="contact" class="footer footer-two">
      <div class="primary-footer brand-bg">
      <div class="container">
      <a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light tt-animate btt" data-section="#top">
      <i class="material-icons">&#xE316;</i>
      </a>
      <div class="row">
      <div class="col-md-12 text-center">
      <div class="footer-logo">
      <img src="assets/img/logo-white.png" alt="">
      </div>
      <ul class="social-link tt-animate ltr">
      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
      <li><a href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
      </div>
      </div>
      </div>
      </div>
      <div class="secondary-footer brand-bg darken-2">
      <div class="container">
      <span class="copy-text">Copyright &copy; 2016 <a href="#">Materialize</a> &nbsp; | &nbsp; All Rights Reserved &nbsp; | &nbsp; Designed By <a href="#">TrendyTheme</a></span>
      </div>
      </div>
      </footer>

      


      <script src="assets/js/jquery-2.1.3.min.js" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="assets/materialize/js/materialize.min.js" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="assets/js/menuzord.js" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="assets/js/bootstrap-tabcollapse.min.js" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="assets/js/jquery.easing.min.js" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="assets/js/jquery.sticky.min.js" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="assets/js/smoothscroll.min.js" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="assets/js/smooth-menu.js" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="assets/js/jquery.stellar.min.js" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="assets/js/imagesloaded.js" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="assets/js/jquery.inview.min.js" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="assets/js/jquery.shuffle.min.js" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="assets/owl.carousel/owl.carousel.min.js" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="assets/flexSlider/jquery.flexslider-min.js" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="assets/magnific-popup/jquery.magnific-popup.min.js" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="assets/js/scriptsae52.js?v=5" type="5f2a35b307d5d1aef624d016-"></script>
      <script src="../../../ajax.cloudflare.com/cdn-cgi/scripts/92209a86/cloudflare-static/rocket-loader.min.js" data-cf-nonce="5f2a35b307d5d1aef624d016-" defer=""></script>

</body>

</body>
@endsection