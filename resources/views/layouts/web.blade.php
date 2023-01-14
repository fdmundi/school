<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="mundi, college, school, french, french everything, bilingual school, primary school">
    <meta name="description" content="@isset($page_description) {{$page_description}} @endisset">
{{--    <meta name="author" content="">--}}
    <!-- page title -->
    <title>Mundi College: Home Of Educational Diversity and Excellence</title>
<!--[if lt IE 9]>
      <script src="{{asset('assets2/js/respond.js')}}"></script>
      <![endif]-->
    <!-- Font files -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700%7CNunito:400,700,900"
          rel="stylesheet">
    <link href="{{asset('assets2/fonts/flaticon/flaticon.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets2/fonts/fontawesome/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Fav icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- style CSS -->
    <link href="{{asset('assets2/css/style.css')}}" rel="stylesheet">
    <!-- plugins CSS -->
    <link href="{{asset('assets2/css/plugins.css')}}" rel="stylesheet">
    <!-- Colors CSS -->
    <link href="{{asset('assets2/styles/maincolors.css')}}" rel="stylesheet">
    <!-- LayerSlider CSS -->
    <link rel="stylesheet" href="{{asset('assets2/vendor/layerslider/css/layerslider.css')}}">


    <!-- Switcher Only -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="{{asset('assets2/switcher/css/switcher.css')}}"
          media="all"/>
    <!-- END Switcher Styles -->

    <!-- Demo Examples (For Module #3) -->

    <link rel="alternate stylesheet" type="text/css" href="{{asset('assets2/styles/maincolors.css')}}"
          title="maincolors" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{asset('assets2/styles/kindergarten.css')}}"
          title="kindergarten" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{asset('assets2/styles/playtime.css')}}" title="playtime"
          media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{asset('assets2/styles/preschool.css')}}" title="preschool"
          media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{asset('assets2/styles/custom.css')}}" title="preschool"
          media="all"/>

</head>
<!-- ==== body starts ==== -->
<body id="top">    <!-- Preloader -->
<div id="preloader">
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="preloader-logo">
                <!-- spinner -->
                <div class="spinner">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
            </div>
            <!--/preloader logo -->
        </div>
        <!--/row -->
    </div>
    <!--/container -->
</div>
<!--/Preloader ends -->
<nav id="main-nav" class="navbar-expand-xl fixed-top">
    <div class="row">
        <!-- Start Top Bar -->
        <div class="container-fluid top-bar ls-hide-on-phone hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Start Contact Info -->
                        <ul class="contact-details float-left  hidden-small">
                            <li><i class="fa fa-map-marker"></i>Road H, Righteous CDA, Onigbin, Ota Nigeria</li>
                            <li><i class="fa fa-envelope"></i><a
                                    href="mailto:info@mundicollege.com">info@mundicollege.com</a></li>
                            <li><i class="fa fa-phone"></i>(+234) 8101033541</li>
                        </ul>
                        <!-- End Contact Info -->
                        <!-- Start Contact Info -->
                        <ul class="contact-details float-left">
                            <li><i class="fa fa-sign-in-alt"></i><a href="{{route('login')}}">Sign in</a></li>
                        </ul>

                        <!-- Start Social Links -->
                        <ul class="social-list float-right list-inline  hidden-small">
                            <li class="list-inline-item"><a title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item"><a title="Twitter" href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a title="Instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                        <!-- /End Social Links -->
                    </div>
                    <!-- col-md-12 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- End Top bar -->

        <div class="navbar container-fluid">
            <div class="container ">
                <!-- logo -->
                <a class="nav-brand" style="min-width:200px" href="{{url('/')}}">
                    <img src="{{asset('assets2/img/logo-400.png')}}" style=";" alt="" class="img-fluid">
                </a>
                <!-- Navbar toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggle-icon">
                  <i class="fas fa-bars"></i>
                  </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <!-- menu item -->
                        <li class="nav-item home-menu">
                            <a class="nav-link" href="{{url('/')}}">Home
                            </a>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="services-dropdown" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Classes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="services-dropdown">
                                <a class="dropdown-item" href="#!">Kindergarten</a>
                                <a class="dropdown-item" href="#!">Nursery</a>
                                <a class="dropdown-item" href="#!">Primary</a>
                                <a class="dropdown-item" href="#!">Secondary</a>
                            </div>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="about-dropdown" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                About
                            </a>
                            <div class="dropdown-menu" aria-labelledby="about-dropdown">
                                <a class="dropdown-item" href="{{route('about')}}">About</a>
                                <a class="dropdown-item" href="javascript:void(0);">Team</a>
                                <a class="dropdown-item" href="{{route('careers')}}">Careers</a>
                                {{--                                <a class="dropdown-item" href="{{route('fees')}}">Fees</a>--}}
                            </div>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item ">
                            <a class="nav-link" href="#" aria-expanded="false">
                                Gallery
                            </a>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item ">
                            <a class="nav-link" href="#" aria-haspopup="true" aria-expanded="false">
                                Contact
                            </a>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="!" aria-haspopup="true" aria-expanded="false">
                                Blog
                            </a>
                        </li>
                    </ul>
                    <!--/ul -->
                </div>
                <!--collapse -->
            </div>
            <!-- /container -->
        </div>
        <!-- /navbar -->
    </div>
    <!--/row -->
</nav>
<!-- /nav -->


@yield('content')

<!--/ page-wrapper -->

<div id="footer" class="footer-1 1-footer">
    <svg version="1.1" id="footer-divider" class="secondary" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 1440 126" xml:space="preserve" preserveAspectRatio="none slice">
<path class="st0" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"/>
</svg>
    <!-- ==== footer ==== -->
    <footer class="bg-secondary text-light">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-4 text-center">
                    <!-- logo -->
                    <img src="{{asset('assets2/img/logo_light.png')}}" class="logo-footer img-fluid" alt=""/>
                    <h5 class="mt-3">Subscribe to our newsletter</h5>
                    <!-- Mailist Form -->
                    <div id="mc_embed_signup">
                        <!-- your mailist address in the line bellow -->
                        <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                              class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <div class="mc-field-group">
                                    <div class="input-group">
                                        <input class="form-control input-lg required email" type="email" value=""
                                               name="EMAIL" placeholder="Your email here" id="mce-EMAIL">
                                        <span class="input-group-btn">
                           <button class="btn btn-tertiary" type="submit" value="Subscribe" name="subscribe"
                                   id="mc-embedded-subscribe">Subscribe</button>
                           </span>
                                    </div>
                                    <!-- Subscription results -->
                                    <div id="mce-responses" class="mailchimp">
                                        <div class="alert alert-danger response" id="mce-error-response"></div>
                                        <div class="alert alert-success response" id="mce-success-response"></div>
                                    </div>
                                </div>
                                <!-- /mc-fiel-group -->
                            </div>
                            <!-- /mc_embed_signup_scroll -->
                        </form>
                        <!-- /form ends -->
                    </div>
                    <!-- /mc_embed_signup -->
                </div>
                <!--/ col-lg -->
                <div class="col-lg-4 text-center res-margin">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-1">(+234) 8101033541</li>
                        <li class="mb-1"><a href="mailto:info@mundicollege.com">info@mundicollege.com</a></li>
                        <li>Road H, Righteous CDA, Onigbin, Obasanjo Farms Bus Stop Ado Odo
                            112212
                            Ota
                            Nigeria</li>
                    </ul>
                    <!--/ul -->
                    <!-- Start Social Links -->
                    <ul class="social-list text-center list-inline mt-2">
                        <li class="list-inline-item"><a title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item"><a title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a title="Instagram" href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                    <!-- /End Social Links -->
                </div>
                <!--/ col-lg -->
                <div class="col-lg-4 text-center">
                    <h5>Working Hours</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-1">Monday to Friday</li>
                        <li class="mb-1">Open from 7am - 4pm</li>
                        <li class="mb-1">Holidays - SUMMER CAMPS</li>
                        <li>Weekends - ICT CLASSES</li>
                    </ul>
                    <!--/ul -->
                </div>
                <!--/ col-lg -->
            </div>
            <!--/ row-->
            <hr/>
            <div class="row">
                <div class="credits col-sm-12">
                    <p>Copyright 2023 | <a href="http://www.ecwahills.com/">Mundi College</a></p>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/ container -->
        <!-- Go To Top Link -->
        <div class="page-scroll hidden-sm hidden-xs">
            <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <!--/page-scroll-->
    </footer>
    <!--/ footer-->
</div>





<!-- Bootstrap core & Jquery -->
<script src="{{asset('assets2/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets2/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('assets2/js/custom.js')}}"></script>
<script src="{{asset('assets2/js/plugins.js')}}"></script>
<!-- Prefix free -->
<script src="{{asset('assets2/js/prefixfree.min.js')}}"></script>
<!-- Bootstrap Select Tool (For Module #4) -->
<script src="{{asset('assets2/switcher/js/bootstrap-select.js')}}"></script>
<!-- All Scripts & Plugins -->
<script src="{{asset('assets2/switcher/js/dmss.js')}}"></script>
<script src="{{asset('assets2/switcher/js/extrastyles.js')}}"></script>
{{--<script src="../../../cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.4/js.cookie.min.js')}}"></script>--}}




<!-- number counter script -->
<script src="{{asset('assets2/js/counter.js')}}"></script>
<!-- maps -->
<script src="{{asset('assets2/js/map.js')}}"></script>
<!-- GreenSock -->
<script src="{{asset('assets2/vendor/layerslider/js/greensock.js')}}"></script>
<!-- LayerSlider script files -->
<script src="{{asset('assets2/vendor/layerslider/js/layerslider.transitions.js')}}"></script>
<script src="{{asset('assets2/vendor/layerslider/js/layerslider.kreaturamedia.jquery.js')}}"></script>
<script src="{{asset('assets2/vendor/layerslider/js/layerslider.load.js')}}"></script>
</body>
</html>
