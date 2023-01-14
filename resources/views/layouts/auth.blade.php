<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- page title -->
    <title>ABC Tots</title>
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
<!-- /nav -->


@yield('content')

<!--/ page-wrapper -->



<div id="footer" class="footer-1 2-footer">
    <!-- ==== footer ==== -->
    <footer class="footer2 bg-secondary text-light">
        <!-- container -->
        <div class="container">
            <div class="col-lg-12 text-center">
                <!-- logo -->
                <img src="{{asset('assets2/img/logo_light.png')}}" class="logo-footer img-fluid" alt=""/>
            </div>
            <!-- row -->
            <div class="row mt-5">
                <div class="col-lg-4 text-center">
                    <h5 class="mt-2">Subscribe to our newsletter</h5>
                    <p>We send emails once a week</p>
                    <!-- Mailist Form -->
                    <div id="mc_embed_signup">
                        <!-- your mailist address in the line bellow -->
                        <form
                            action="http://listname.list-manage.com/subscribe/post?u=04e646927a196552aaee78a7b&amp;id=0dae358e08"
                            method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
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
                        <li class="mb-1"><i class="fas fa-phone margin-icon "></i>(123) 456-789</li>
                        <li class="mb-1"><i class="fas fa-envelope margin-icon"></i><a href="mailto:email@yoursite.com">email@yoursite.com</a>
                        </li>
                        <li><i class="fas fa-map-marker margin-icon"></i>Street Name 123 - New York</li>
                    </ul>
                    <!--/ul -->
                </div>
                <!--/ col-lg -->
                <div class="col-lg-4 text-center">
                    <h5>Working Hours</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-1">Monday to Friday</li>
                        <li class="mb-1">Open from 9am - 6pm</li>
                        <li class="mb-1">Holidays / Weekends - Closed</li>
                    </ul>
                    <!--/ul -->
                </div>
                <!--/ col-lg -->
            </div>
            <!--/ row-->
            <hr/>
            <!-- col-md-12 -->
            <div class="col-md-12">
                <div class="credits row">
                    <div class="col-md-6">
                        <p class="float-left mt-3">Copyright 2019 / Designed by <a href="http://www.ecwahills.com/">Ingrid
                                Kuhn</a></p>
                    </div>
                    <!--/col-md-6 -->
                    <div class="col-md-6">
                        <!-- Start Social Links -->
                        <ul class="social-list float-right list-inline mb-0">
                            <li class="list-inline-item"><a title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item"><a title="Twitter" href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a title="Instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                        <!-- /End Social Links -->
                    </div>
                    <!--/col-md-6 -->
                </div>
                <!--/credits -->
            </div>
            <!--/col-md-12-->
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


<div id="footer" class="footer-1 3-footer">
    <!-- ==== footer ==== -->
    <footer class="footer3 bg-secondary text-light">
        <div class="container">
            <!-- row -->
            <div class="row mt-3">
                <div class="col-lg-4 text-center">
                    <h5>Working Hours</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-1">Monday to Friday</li>
                        <li class="mb-1">Open from 9am - 6pm</li>
                        <li class="mb-1">Holidays/Weekends - Closed</li>
                    </ul>
                    <!--/ul -->
                </div>
                <!--/ col-lg -->
                <div class="col-lg-4 text-center">
                    <!-- logo -->
                    <img src="{{asset('assets2/img/logo_light.png')}}" class="logo-footer img-fluid" alt=""/>
                    <p class="mt-4">Aliquam erat volutpat Aliquam erat volutpat In id fermentum augue, lorem ut
                        pellentesque leo. Maecenas at arcu risus.</p>
                </div>
                <!--/ col-lg -->
                <div class="col-lg-4 text-center res-margin">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-1">(123) 456-789</li>
                        <li class="mb-1"><a href="mailto:email@yoursite.com">email@yoursite.com</a></li>
                        <li>Street Name 123 - New York</li>
                    </ul>
                    <!--/ul -->
                </div>
                <!--/ col-lg -->
                <div class="col-md-12">
                    <!-- Start Social Links -->
                    <ul class="social-list big-icons text-center list-inline mt-2">
                        <li class="list-inline-item"><a title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item"><a title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a title="Instagram" href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                    <!-- /End Social Links -->
                </div>
                <!--/col-md-12 -->
            </div>
            <!--/ row-->
            <hr/>
            <div class="row">
                <div class="credits col-sm-12">
                    <p>Copyright 2019 / Designed by <a href="http://www.ecwahills.com/">Ingrid Kuhn</a></p>
                </div>
                <!--/credits -->
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
