@extends('layouts.graficaspie')
@section('contentreportes')
<body id="top">
        
        <section class="banner-1 bg-fixed parallax-bg fullscreen-banner valign-wrapper" data-stellar-background-ratio="0.5">
            <div class="valign-cell">
              <div class="container">
              	<div class="comingsoon-wrapper text-center">
	                <div class="logo">
	                    <a href="#">
	                    	<img src="assets/img/icon-logo.png" alt="">
	                    </a>
	                </div>
	                
	                <div class="mb-50">
	                    <h1 class="intro-title black-text text-uppercase">Coming soon</h1>
	                    <p class="sub-intro lead">An awesome new company for web resources is coming very soon. Enter your email to request an early invitation!</p>
	                </div>

	                <div class="countdown-wrapper">
	                    <ul class="countdown">
	                        <li>                    
	                            <span class="days">00</span>
	                            <p>days</p>
	                        </li>
	                        <li>
	                            <span class="hours">00</span>
	                            <p>hours </p>
	                        </li>
	                        <li>
	                            <span class="minutes">00</span>
	                            <p>minutes</p>
	                        </li>
	                        <li>
	                            <span class="seconds">00</span>
	                            <p>seconds</p>
	                        </li>               
	                    </ul><!-- /countdown -->
	                </div>

		             <div class="row">
		                <div class="col-md-6 col-md-offset-3">
		                  <div class="subscribe-wrapper text-center">
                          <form class="subscribe-form mailchimp" method="post">

                              <div class="input-field">
                                <label class="sr-only" for="email">Email</label>
                                <input id="subscribeEmail" type="email" name="subscribeEmail" class="validate" >

                                <!-- to showing error message -->
                                <label for="subscribeEmail" data-error="wrong" data-success="right">Type your email</label>
                              </div>

                              <button type="submit" class="btn btn-lg pink waves-effect waves-light mt-30 text-capitalize">Subscribe Now</button>

                              <!-- to showing success messages -->
                              <p class="subscription-success text-center grey-text"></p>
                          </form>
                      </div><!-- /.subscribe-wrapper -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
              </div><!-- /.comingsoon-wrapper -->

              </div><!-- /.container -->
            </div><!-- /.valign-cell -->
        </section>


        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    	<h2 class="font-25 text-bold text-uppercase mb-30">About startup</h2>
                    	<p>materialize material design multi-purpose html template. It comes with huge content and background variants. <a href="#">materialize</a> is an awesome new company for web resources is coming very soon. We are nearly there..</p>

                      <div class="progress-section">
                          <span class="progress-title">UX Design</span>
                          <div class="progress">
                              <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                  <span>90%</span>
                              </div>
                          </div><!-- /.progress -->
                      </div> <!-- progress-section end -->

                      <div class="progress-section">
                          <span class="progress-title">Web Design</span>
                          <div class="progress">
                              <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                  <span>86%</span>
                              </div>
                          </div>
                      </div> <!-- progress-section end -->

                      <div class="progress-section">
                          <span class="progress-title">Web Development</span>
                          <div class="progress">
                              <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                  <span>86%</span>
                              </div>
                          </div>
                      </div> <!-- progress-section end -->

                    </div>
                    <div class="col-md-5 col-md-offset-1">
                    	<h2 class="font-25 text-bold text-uppercase mb-30">Have any question?</h2>
                        <p>You can use contact form below or contact us via e-mail at: <a href="#">trendytheme.net@gmail.com</a> Contact form is fully working and very easy to customize.</p>

	                    <form class="comingsoon-contact" name="contact-form" id="contactForm" action="sendemail.php" method="POST">

	                      <div class="row">
	                        <div class="col-md-6">
	                          <div class="input-field">
	                            <input type="text" name="name" class="validate" id="name">
	                            <label for="name">Name</label>
	                          </div>

	                        </div><!-- /.col-md-6 -->

	                        <div class="col-md-6">
	                          <div class="input-field">
	                            <label class="sr-only" for="email">Email</label>
	                            <input id="email" type="email" name="email" class="validate" >
	                            <label for="email" data-error="wrong" data-success="right">Email</label>
	                          </div>
	                        </div><!-- /.col-md-6 -->
	                      </div><!-- /.row -->

	                      <div class="input-field">
	                        <textarea name="message" id="message" class="materialize-textarea" ></textarea>
	                        <label for="message">Message</label>
	                      </div>

	                      <button type="submit" name="submit" class="waves-effect waves-light btn submit-button pink mt-30 text-capitalize">Send Message</button>
	                    </form>

                    </div>
                </div><!-- /.row -->
            </div>
        </section>



        <footer class="footer footer-four">
            <div class="primary-footer brand-bg text-center">
                <div class="container">

                  <a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light tt-animate btt" data-section="#top">
                    <i class="material-icons">&#xE316;</i>
                  </a>

                  <ul class="social-link tt-animate ltr mt-20">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                  </ul>

                  <hr class="mt-15">

                  <div class="row">
                    <div class="col-md-12">
                          <div class="footer-logo">
                            <img src="assets/img/logo-white.png" alt="">
                          </div>

                          <span class="copy-text">Copyright &copy; 2016 <a href="#">Materialize</a> &nbsp; | &nbsp;  All Rights Reserved &nbsp; | &nbsp;  Designed By <a href="#">TrendyTheme</a></span>
                          <div class="footer-intro">
                            <p>Penatibus tristique velit vestibulum adipiscing habitant aenean feugiat at condimentum aptent odio orci vulputate hac mollis a.Vestibulum adipiscing gravida justo a ac euismod vitae.</p>
                          </div>
                    </div><!-- /.col-md-12 -->
                  </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.primary-footer -->

            <div class="secondary-footer brand-bg darken-2 text-center">
                <div class="container">
                    <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Portfolio</a></li>
                      <li><a href="#">Contact us</a></li>
                    </ul>
                </div><!-- /.container -->
            </div><!-- /.secondary-footer -->
        </footer>

        
       
</body>
@endsection