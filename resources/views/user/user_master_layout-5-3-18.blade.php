<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from usman.kaboolhai.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2017 06:36:01 GMT -->

<head>
    <title>Kabool</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ $user_assets }}/images/favicon.png">
     @stack('css')
</head>

<body>
    <!-- navigation panel -->
    <nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav nav-white nav-border-bottom" role="navigation">
  <div class=" container-fluid">
    <div class="row"> 
      <!-- logo -->
      <div class="col-md-3 pull-left"> <a class="logo-light" href="index-2.html"><img alt="" src="{{ $user_assets }}/images/kaboolhai.png" class="logo" /></a> <a class="logo-dark" href="index-2.html"><img alt="" src="{{ $user_assets }}/images/logo-white2.png" class="logo" /></a></div>
      <!-- end logo --> 
      <!-- search and cart  --> 
      
      <!-- end search and cart  --> 
      <!-- toggle navigation -->
      <div class="navbar-header col-lg-9 col-md-9 col-sm-6 col-xs-2 pull-right">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <!-- toggle navigation end --> 
      <!-- main menu -->
      <div class="col-md-9 no-padding-right accordion-menu text-right">
        <div class="navbar-collapse collapse"> 
          <!--<ul id="accordion" class="nav navbar-nav navbar-right panel-group">
            <li> <a href="register.html">Register</a> </li>
            <li> <a href="#"> Login </a> </li>
            <li> <a href="#"> About</a> </li>
            <li> <a href="#"> FAQs </a> </li>
            <li> <a href="#"> Contact Us</a> </li>
          </ul>--> 
          <a href="javascript:;"><i class="fa fa-bars humburger"></i></a> </div>
      </div>
      <!-- end main menu --> 
    </div>
  </div>
</nav>

     @yield('data')
    
<footer>
    <div class="container-fluid footer-middle">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <!-- headline -->

                    <h2 class="alt-font white-text padding-three-bottom">Stay Tuned</h2>
                    <ul class="leftulsocialicon">
                        <li><i class="fa fa-facebook i-small-box i-rounded i-bordered i-circled" style="background:#385798 !important"></i> <span>Facebook</span></li>
                        <li> <i class="fa fa-google-plus i-small-box i-rounded i-bordered i-circled" style="background:#f93f19 !important"></i> <span>Google +</span></li>
                        <li> <i class="fa fa fa-linkedin i-small-box i-rounded i-bordered i-circled" style="background:#0273b9 !important"></i> <span>linkedin</span></li>
                    </ul>
                    <ul class="rightulsocialicon">
                        <li><i class="fa fa-twitter i-small-box i-rounded i-bordered i-circled" style="background:#2dace3 !important"></i> <span>Twitter</span></li>
                        <li> <i class="fa fa-youtube i-small-box i-rounded i-bordered i-circled" style="background:#fa3026 !important"></i> <span>Youtube</span></li>
                        <li> <i class="fa fa-rss i-small-box i-rounded i-bordered i-circled" style="background:#f48907 !important"></i> <span>Blog</span></li>
                    </ul>
                    <!-- end headline -->
                    <!-- text -->

                    <!-- end text -->
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <!-- headline -->
                    <h2 class="alt-font white-text padding-three-bottom">Quick Links</h2>
                    <!-- end headline -->
                    <!-- link -->

                    <ul>
                        <li>Home</li>
                        <li>About Us</li>
                        <li>Services</li>
                        <li>FAQs</li>
                        <li>Contact Us</li>
                    </ul>
                    <ul>
                        <li>Business</li>
                        <li>Companies</li>
                        <li>Jobs</li>
                        <li>FAQs</li>
                        <li>Supports</li>
                    </ul>

                    <!-- end link -->
                </div>

                <div class="col-xs-12 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-1 col-lg-8 col-lg-offset-1">
                    <div class="trastermillion">Trusted by Members</div>
                    <div class="footericonimg">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="footericonimgitems"> <i class="fa fa-user i-small-box i-rounded i-bordered i-circled" style="background:#91cfae !important"></i>
                                    <p>Verified Members</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="footericonimgitems"> <i class="fa fa-envelope i-small-box i-rounded i-bordered i-circled" style="background:#91cfae !important"></i>
                                    <p>Fast Responses</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="footericonimgitems"> <i class="fa fa-lock i-small-box i-rounded i-bordered i-circled" style="background:#91cfae !important"></i>
                                    <p>100% Secured</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-4 col-xs-4  footer-link4">
                <!-- headline -->
                <div class="col-md-12 col-sm-12 col-xs-12  ">
                    <h2 class="alt-font white-text padding-three-bottom">Contact Us</h2>
                </div>
                <!-- end headline -->
                <!-- link -->
                <div class="col-md-12 col-sm-12 col-xs-12  ">
                    <input placeholder="Your Name" required name="name" type="text" class="div-in">
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12  ">
                    <input placeholder="Your Email" required name="Email" type="text" class="div-in">
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12  ">
                    <input placeholder="Telephone Number" required name="Email" type="text" class="div-in">
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12  ">
                    <textarea name="" cols="" rows="4" class="div-in" placeholder="Message"></textarea>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12  "> <a class="btn-small-white-background btn btn-medium button submit-btn" href="#">SUBMIT</a></div>
                <!-- end link -->
            </div>
        </div>
        <div class="">
            <div class="container-fluid">
                <div class="border-top-class">
                    <div class="row margin-one margin-bottom-five">
                        <div class="col-lg-4 white-text fontsize12px">
                            <h5><img src="{{ $user_assets }}/images/logo-white2.png" ></h5> ©2017 kaboolhai.com All rights reserved.</div>
                        <div class="col-md-5 col-sm-12 sm-text-center ">
                            <!-- link -->

                            <ul class="list-inline footer-link pull-right " style="width:100%">
                                <li><a href="#l">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                            <!-- end link -->
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="poweredbygogle">
                                <select>
                                    <option value="" disabled selected>Select Language</option>
                                    <option>English</option>
                                </select>
                                <p>Powered By <span><img src="{{ $user_assets }}/images/googlelogo.png" /></span> Translate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- scroll to top -->
        <a href="javascript:;" class="scrollToTop"></a>
    </div>
    <!-- scroll to top End... -->
</footer>
</body>
    @stack('js')

</html>