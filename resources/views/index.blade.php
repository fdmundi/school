@extends('layouts.web')


@section('content')
    <div class="clearfix" style="clear: both!important"></div>
    <div class="container-fluid p-0">
        <!-- Parallax Slider -->
        @if(session('success'))
        <div class="row " style="margin-top:150px!important;">
            <span class="alert green text-success">{{session('success')}}</span>
        </div>
        @endif
        <div id="slider" class="parallax-slider" style="width:1200px;margin:0 auto;margin-bottom: 0px;">
            <!-- Slide 1 -->
            <div class="ls-slide" data-ls="duration:4000; transition2d:7;">
                <!-- background image  -->
                <img src="{{asset('assets2/img/slider/parallaxslider/slide1.jpg')}}" class="ls-bg" alt=""/>
                <!-- clouds  -->
                <img src="{{asset('assets2/img/slider/parallaxslider/clouds.png')}}" class="ls-l" alt=""
                     style="top:56px;left:-100px;" data-ls="parallax:true; parallaxlevel:-5;">
                <!-- butterflies  -->
                <img src="{{asset('assets2/img/slider/parallaxslider/butterflies.png')}}" class="ls-l" alt=""
                     style="top:16px;left:0px;" data-ls=" parallax:true; parallaxlevel:4;">
                <!-- sun  -->
                <img src="{{asset('assets2/img/slider/parallaxslider/sun.png')}}" class="ls-l" alt=""
                     style="top:-190px;left:650px;" data-ls="parallax:true; parallaxlevel:-3;">
                <!--child image  -->
                <img src="{{asset('assets2/img/slider/parallaxslider1.png')}}" class="ls-l" alt=""
                     style="top:166px;left:520px;"
                     data-ls="offsetxin:10; offsetyin:120; durationin:1100; rotatein:5; transformoriginin:59.3% 80.3% 0; offsetxout:-80; durationout:400; parallax:true; parallaxlevel:10;">
                <!-- text  -->
                <div class="ls-l header-wrapper"
                     data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; margin-top:200px">
                    <div class="header-text">

                        <span>Welcome to</span>
                        <h2 style="font-size:33px!important;"> MUNDI COLLEGE</h2>
                        <!--the div below is hidden on small screens  -->
                        <div class=" hidden-small   ">
                            <p class="header-p">
                                Raising productive citizens &amp; <br>
                                Opening International Doors.
                            </p>
                            <ul class="slog" style="list-style-type: none!important; font-size: 15px;">
                                <li style="display: inline; color:blue">Private School</li>
                                |
                                <li style="display: inline; color:blueviolet">Computer Institute</li>
                                |
                                <li style="display: inline; color: blue ">French Language Center</li>
                            </ul>
                            <a class="btn btn-secondary" href="{{route('contact')}}">Contact us</a>
                        </div>
                        <!--/hidden-small -->
                    </div>
                    <!-- header-text  -->
                </div>
                <!-- ls-l  -->
            </div>
            <!-- ls-slide -->
        </div>
        <!-- /slider -->
        <svg version="1.1" id="divider" class="slider-divider" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1440 126" preserveAspectRatio="none slice" xml:space="preserve">
<path class="st0" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"/>
</svg>
    </div>
    <!-- /container-fluid -->
    <!-- ==== Page Content ==== -->
    <div class="container">
        <!-- section -->
        <section id="intro-cards" class="row pb-0">
            <!-- card 1 -->
            <div class="col-lg-4" data-aos="zoom-out">
                <div class="card card-flip">
                    <!-- front of card  -->
                    <div class="card bg-secondary text-light ">
                        <div class="p-5">
                            <h5 class="card-title text-light">Private School.</h5>
                            <p class="card-text">
                                As a System, we pride ourselves in the quality of teaching, learning and educational
                                processes our students go through in group/class or One-on-One.
                            </p>
                            <!-- button show on mobile only,where flip is disabled -->
                            <a href="{{route('contact')}}" class="btn ">Apply For Admission</a>
                        </div>
                        <!-- /p-5 -->
                        <!-- image -->
                        <img class="card-img" src="{{asset('assets2/img/intro1.jpg')}}" alt="">
                    </div>
                    <!-- /card -->
                    <!-- back of card -->
                    <div class="card bg-secondary text-light card-back">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div class="p-4">
                                <h5 class="card-title text-light">Since 2020</h5>
                                <p class="card-text">
                                    Using Relevant Technologies, platforms and systems to Deliver Excellent
                                    Academic Learning Processes - Seeing our students coming out on top where
                                    privileged has been our prioroty.
                                </p>
                                <!-- button -->
                                <a href="{{route('contact')}}" class="btn">contact us</a>
                            </div>
                            <!-- /p-4 -->
                        </div>
                        <!-- /card-body -->
                    </div>
                    <!-- /card -->
                </div>
                <!--/col-lg -->
            </div>
            <!--/card 1 -->
            <!-- card 2-->
            <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                <div class="card card-flip ">
                    <!-- front of card  -->
                    <div class="card bg-primary text-light">
                        <div class="p-5">
                            <h5 class="card-title text-light">Computer Institute</h5>
                            <p class="card-text">
                                We Offer Up-to-date Courses in Data Analysis, Computer Programming and General ICT
                                Skills to ensure every student is ready for the World of Tomorrow;
                            </p>
                            <!-- button show on mobile only,where flip is disabled -->
                            <a href="#!" class="btn ">I need  a Quotation!</a>
                        </div>
                        <!-- /p-5 -->
                        <!-- image -->
                        <img class="card-img" src="{{asset('assets2/img/intro2.jpg')}}" alt="">
                    </div>
                    <!-- /card -->
                    <!-- back of card -->
                    <div class="card bg-primary text-light card-back">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div class="p-4">
                                <h5 class="card-title text-light">WEB, MOBILE</h5>
                                <p class="card-text">
                                    We run continuous learning Processes for our community in Web and Mobile
                                    Apps Development, Robotics, Data Analysis, Digital Marketing and E-Library
                                    within the School Schedules and Outside the Academic routines.
                                </p>
                                <!-- button -->
                                <a href="#!" class="btn">Join Now!</a>
                            </div>
                            <!-- /p-4 -->
                        </div>
                        <!-- /card-body -->
                    </div>
                    <!-- /card -->
                </div>
                <!--/card 2 -->
            </div>
            <!--/col-lg -->
            <!-- card 3-->
            <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="600">
                <div class="card card-flip ">
                    <!-- front of card  -->
                    <div class="card bg-tertiary text-light">
                        <div class="p-5">
                            <h5 class="card-title text-light">French Language Center</h5>
                            <p class="card-text">
                                Get First Class Learning Process in our French Language Center to prepare
                                you and your children for the international Career and Opportunities we provided.
                            </p>
                            <!-- button show on mobile only,where flip is disabled -->
                            <a href="#!" class="btn">Start Learning</a>
                        </div>
                        <!-- /p-5 -->
                        <!-- image -->
                        <img class="card-img" src="{{asset('assets2/img/intro3.jpg')}}" alt="">
                    </div>
                    <!-- /card -->
                    <!-- back of card -->
                    <div class="card bg-tertiary text-light card-back">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div class="p-4">
                                <h5 class="card-title text-light">French Center</h5>
                                <p class="card-text">
                                    If your interest is in International Studies or Career Paths, our center prepares you for the
                                    necessary/required Exams and certifications to enable to beat the processes and gain seamless
                                    access to the desired International Destination.
                                </p>
                                <!-- button -->
                                <a href="{{route('team')}}" class="btn">Start Learning</a>
                            </div>
                            <!-- /p-4 -->
                        </div>
                        <!-- /card-body -->
                    </div>
                    <!-- /card -->
                </div>
                <!--/card 3 -->
            </div>
            <!--/col-lg -->
        </section>
        <!-- #intro-cards -->
    </div>
    <!-- /container -->
    <!-- section -->
    <section id="about-home" class="container-fluid pb-0">
        <div class="container">
            <!-- section heading -->
            <div class="section-heading text-center">
                <h2>About Us</h2>
                <p class="subtitle">Get to know us</p>
            </div>
            <!-- /section-heading -->
            <div class="row">
                <div class="col-lg-7 ">
                    <h3>Who are we?</h3>
                    <p class="mt-4 res-margin">
                       <strong>Mundi College/French Everything Bilingual School</strong>  is one of the Best Schools and Learning Centers in OTA, Ogun State; We run normal academic programs from Daycare to SSS 2 with emphasis to <strong>Computing,
                            Mathematics, English and French.</strong> We equally offer daycare services to our busy
                        parents.
                    </p>
                    <p>
                        We do prepare learners for the following academic certifications:
                        <strong>
                            WAEC, BECE, NECO, GCE,
                            IGCSE, JAMB AND CAMBRIDGE A LEVEL We also prepare them for French Certifications like DELF,
                            DALF and TEF
                        </strong> to give them a broader scope of influence worldwide. Laureates of TEF find it
                        very easy to get visas into Canada.
                    </p>
                    <p>
                        To get our learners ready for the job market, we train them
                        to sit for Microsoft and Google Certifications like Microsoft Certificate Education and Google
                        Digital Skills for Africa thereby
                        <strong>
                            Raising Productive Citizens and Opening International Doors
                        </strong>.
                    </p>
                    <a href="{{route('contact')}}" class="btn btn-secondary ">Contact us</a>
                </div>
                <!-- /col-lg -->
                <div class="col-lg-5 res-margin">
                    <!-- image -->
{{--                    <img class="img-fluid rounded" src="{{asset('assets2/img/about/about2.jpg')}}" alt="">--}}
                    <video src="{{asset('assets/videos/school-assembly.mp4')}}" autoplay="autoplay" controls
                     width="100%" height="400px"></video>
                    <!-- ornament starts-->
{{--                    <div class="ornament-rainbow" data-aos="zoom-out"></div>--}}
                </div>
                <!-- /col-lg -->
            </div>
            <!-- /row -->
            <h3 class="mt-5 text-center">What Parents say:</h3>
            <div class="row">
                <!-- testimonials -->
                <!-- testimonial carousel -->
                <div class="carousel-2items owl-carousel owl-theme col-md-12">
                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="content">
                            <p class="description">
                                I already concluded it was impossible until i Got here.
                                My son has always been unresponsive to teachings;
                            </p>
                        </div>
                        <!-- /content -->
                        <div class="testimonial-pic">
                            <img src="{{asset('assets2/img/team/team1.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <!-- /testimonial-pic -->
                        <div class="testimonial-review">
                            <h5 class="testimonial-title">Wale Omowale</h5>
                            <span class="post">Parent</span>
                        </div>
                        <!-- /testimonial-review -->
                    </div>
                    <!-- /testimonial -->
                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="content">
                            <p class="description">
                                Whenever We teach, our intentions are deliberate Mundi College is a
                                place where you will work, learn, and continue to advance your career.
                                The System is designed to dynamically grow children in all dimension and as well tell how they can evaluate
                                the teaching/learning processes through open feedback channels.
                            </p>
                        </div>
                        <!-- /content -->
                        <div class="testimonial-pic">
                            <img src="{{asset('assets2/img/team/team2.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <!-- /testimonial-pic -->
                        <div class="testimonial-review">
                            <h5 class="testimonial-title">Mrs. Kalu N.</h5>
                            <span class="post">Teacher, Mundi College</span>
                        </div>
                        <!-- /testimonial-review -->
                    </div>
                    <!-- /testimonial -->
                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="content">
                            <p class="description">
                                Learning International Language as well as Performing excellently in
                                conventionsl Curricular activities is awesome, to me.
                                Having the Chance to Learn ICT Skill is the most Beneficial to me and my Children.
                            </p>
                        </div>
                        <!-- /content -->
                        <div class="testimonial-pic">
                            <img src="{{asset('assets2/img/team/team4.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <!-- /testimonial-pic -->
                        <div class="testimonial-review">
                            <h5 class="testimonial-title">Oluwajuwon Dennis</h5>
                            <span class="post">Librarian, Parent</span>
                        </div>
                        <!-- /testimonial-review -->
                    </div>
                    <!-- /testimonial -->
                </div>
                <!-- /owl-testimonial -->      </div>
            <!-- /row -->
        </div>
        <!-- /container-->
        <!-- whale in water scene -->
        <!-- whale -->
        <img src="{{asset('assets2/img/ornaments/whale.png')}}" class="floating-whale" alt="">
        <!-- waves -->
        <div class="waveHorizontals">
            <div id="waveHorizontal1" class="waveHorizontal"></div>
            <div id="waveHorizontal2" class="waveHorizontal"></div>
            <div id="waveHorizontal3" class="waveHorizontal"></div>
        </div>
        <!-- sea -->
        <div class="sea"></div>
        <!--/ whale in water scene ends -->
    </section>
    <!-- /section ends -->
    <!-- section -->
    <section id="features" class="bg-secondary text-light">
        <div class="container">
            <!-- section heading -->
            <div class="section-heading text-center">
                <h2>Why Us?</h2>
                <p class="subtitle">Benefits for you</p>
            </div>
            <!-- /section-heading -->
            <!-- features -->
            <div class="row ">
                <div class="col-lg-6">
                    <div class="row ">
                        <div class="col-md-6 col-lg-6">
                            <!-- feature -->
                            <div class="feature-with-icon">
                                <div class="icon-features">
                                    <!-- icon -->
                                    <i class="flaticon-maternity text-primary"></i>
                                </div>
                                <h5>Safe Enviroment</h5>
                                <p>Our Safety First Principle Keeps our Children safe and healthy.</p>
                            </div>
                            <!-- /feature-with-icon-->
                            <!-- feature -->
                            <div class="feature-with-icon mt-5">
                                <div class="icon-features">
                                    <!-- icon -->
                                    <i class="flaticon-open-book-1 text-primary"></i>
                                </div>
                                <h5>Educational Activities</h5>
                                <p>Unique Learning Curves with Up-to-date Technologies and Platforms.</p>
                            </div>
                            <!-- /feature-with-icon-->
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <!-- feature -->
                            <div class="feature-with-icon">
                                <div class="icon-features">
                                    <!-- icon -->
                                    <i class="flaticon-classroom-1 text-primary"></i>
                                </div>
                                <h5>Qualified Teachers</h5>
                                <p>Expert Tutors Trained to Produce Quality Leaders in all Spheres.</p>
                            </div>
                            <!-- /feature-with-icon-->
                            <!-- feature -->
                            <div class="feature-with-icon mt-5">
                                <div class="icon-features">
                                    <!-- icon -->
                                    <i class="flaticon-baby-boy text-primary"></i>
                                </div>
                                <h5>Infant care</h5>
                                <p>We concentrate more on the Background to ensure better growth.</p>
                            </div>
                            <!-- /feature-with-icon-->
                        </div>
                        <!-- /col-l -->
                    </div>
                    <!-- /row-->
                </div>
                <!-- /col-l -->
                <div class="col-lg-6 features-bg">
                    <!-- image -->
                    <img src="{{asset('assets2/img/features.png')}}" alt="" class="img-fluid" data-aos="zoom-out"
                         data-aos-delay="300"/>
                </div>
                <!-- /col-l -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /section ends -->
    <!-- section -->
    <section id="services-home" class="container-fluid">
        <div class="container pb-5">
            <!-- section heading -->
            <div class="section-heading text-center">
                <h2>Our Services</h2>
                <p class="subtitle">what we offer</p>
            </div>
            <!-- /section heading -->
            <!-- row -->
            <div class="row vertical-tabs">
                <div class="col-lg-12">
                    <!-- navigation -->
                    <div class="tabs-with-icon">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link" id="tab4-tab" data-toggle="tab" href="#tab4"><i
                                        class="flaticon-blackboard"></i>Classes</a>
                                <a class="nav-item nav-link" id="tab5-tab" data-toggle="tab" href="#tab5"><i
                                        class="flaticon-kids"></i>Activities</a>
                                <a class="nav-item nav-link" id="tab2-tab" data-toggle="tab" href="#tab2"><i
                                        class="flaticon-kids-1"></i>Summer Camp</a>
                                <a class="nav-item nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1"><i
                                        class="flaticon-abc-block"></i>Daycare</a>
                                <a class="nav-item nav-link" id="tab3-tab" data-toggle="tab" href="#tab3"><i
                                        class="flaticon-smiling-baby"></i>Infant care</a>
                            </div>
                        </nav>
                        <!-- tab-content -->
                        <div class="tab-content block-padding bg-light" id="nav-tabContent">
                            <div class="tab-pane" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                                <!-- row -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- image -->
                                        <img src="{{asset('assets2/img/services/service1.jpg')}}" alt=""
                                             class="rounded img-fluid">
                                        <!-- ornament starts-->
{{--                                        <div class="ornament-rainbow" data-aos="fade-right"></div>--}}
                                    </div>
                                    <!-- col-lg -->
                                    <div class="col-lg-6">
                                        <h3>Daycare</h3>
                                        <p>
                                            Children would be looked after in
                                            day care and mothers would work.
                                            <strong>
                                                Parents drop off their children during the day
                                                for care, supervision, and learning
                                            </strong>
                                        </p>
                                        <ul class="custom pl-0">
                                            <li>Over 22 Qualified professionals</li>
                                            <li>We offer you our quality services since 2020</li>
                                            <li>Educational activities in our daily plan</li>
                                        </ul>
                                        <!-- Button -->
                                        <a href="#!" class="btn btn-secondary mt-4">Read More</a>
                                    </div>
                                    <!-- /col-lg -->
                                </div>
                                <!-- row -->
                            </div>
                            <!-- ./Tab-pane -->
                            <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3>Summer Camp</h3>
                                        <p>
                                            Too much play can make Jack a Dull Boy; So we have consistent Summer Camps
                                            to help our Students Learn New Skills and Fill u
                                            up the missing spaces in their collective or individual Learning processes.
                                        </p>
                                        <ul class="custom pl-0">
                                            <li>Coding/Programming Camps</li>
                                            <li>English, French and Mathematics</li>
                                            <li>Robotics, Pyisics and Chemistry</li>
                                        </ul>
                                        <!-- Button -->
                                        <a href="#!" class="btn btn-secondary mt-4">Read More</a>
                                    </div>
                                    <!-- /col-lg -->
                                    <div class="col-lg-6 res-margin">
                                        <!-- image -->
                                        <img src="{{asset('assets2/img/services/service2.jpg')}}" alt=""
                                             class="rounded img-fluid">
                                        <!-- ornament starts-->
                                        <div class="ornament-stars" data-aos="fade-right"></div>
                                    </div>
                                    <!-- col-lg -->
                                </div>
                                <!-- row -->
                            </div>
                            <!-- ./Tab-pane -->
                            <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- image -->
                                        <img src="{{asset('assets2/img/services/service3.jpg')}}" alt=""
                                             class="rounded img-fluid">
                                        <!-- ornament starts-->
                                        <div class="ornament-bubbles" data-aos="fade-right"></div>
                                    </div>
                                    <!-- col-lg -->
                                    <div class="col-lg-6">
                                        <h3>Infant Care</h3>
                                        <p>
                                            From the little age, we understand needs of infants as professionals and
                                            we care for them in the best way possible to give the family
                                            the chance to plan their future while beating their own career schedules.
                                        </p>
                                        <ul class="custom pl-0">
                                            <li>Qualified Mothers and Baby Sitters</li>
                                            <li>Play Groups and Infant Maintenance Service</li>
                                            <li>Parent and Family Infant care Coaching</li>
                                        </ul>
                                        <!-- Button -->
                                        <a href="#!" class="btn btn-secondary mt-4">Read More</a>
                                    </div>
                                    <!-- /col-lg -->
                                </div>
                                <!-- row -->
                            </div>
                            <!-- ./Tab-pane -->
                            <div class="tab-pane active" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3>Classes</h3>
                                        <p>
                                            Everyone is Gifted to Learn and become anyone in Life; Our Niche is
                                            to ensure Every child is developed into desired specified Course
                                            and General Lifestyle for optimum Success in Academics and Career Paths.
                                        </p>
                                        <ul class="custom pl-0">
                                            <li>Creche, KG</li>
                                            <li>Primary School</li>
                                            <li>Secondary Schools</li>
                                        </ul>
                                        <!-- Button -->
                                        <a href="#!" class="btn btn-secondary mt-4">Read More</a>
                                    </div>
                                    <!-- /col-lg -->
                                    <div class="col-lg-6 res-margin">
                                        <!-- image -->
                                        <img src="{{asset('assets2/img/services/service4.jpg')}}" alt=""
                                             class="rounded img-fluid">
                                        <!-- ornament starts-->
                                        <div class="ornament-stars" data-aos="fade-right"></div>
                                    </div>
                                    <!-- col-lg -->
                                </div>
                                <!-- row -->
                            </div>
                            <!-- ./Tab-pane -->
                            <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- image -->
                                        <img src="{{asset('assets2/img/services/service5.jpg')}}" alt=""
                                             class="rounded img-fluid">
                                        <!-- ornament starts-->
{{--                                        <div class="ornament-rainbow" data-aos="fade-right"></div>--}}
                                    </div>
                                    <!-- col-lg -->
                                    <div class="col-lg-6">
                                        <h3>Activities</h3>
                                        <p>
                                            We center our activities around Formal Education, ICT, Vocational Skills and
                                            Other Extracurricular activities to help identify the shown and hidden
                                            talents
                                            and skills i every child and Teacher.
                                        </p>
                                        <ul class="custom pl-0">
                                            <li>ICT and Programming Sessions</li>
                                            <li>Baking, Crafting, Inventing and Music</li>
                                            <li>Music, Soccer, Gaming</li>
                                            <li>Excursion and Outdoor Adventures</li>
                                        </ul>
                                        <!-- Button -->
                                        <a href="services-single.html" class="btn btn-secondary mt-4">Read More</a>
                                    </div>
                                    <!-- /col-lg -->
                                </div>
                                <!-- row -->
                            </div>
                            <!-- ./Tab-pane -->
                        </div>
                        <!-- ./Tab-content -->
                    </div>
                    <!-- vertical-tabs -->
                </div>
                <!-- /col-lg-6 -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /section ends -->
    <!-- Section  -->
    <section id="counter-section" class="container-fluid counter-calltoaction bg-fixed overlay"
             data-100-bottom="background-position: 50% 100px;"
             data-top-bottom="background-position: 50% -100px;">
        <div id="counter" class="container">
            <div class="row col-lg-10 offset-lg-1">
                <!-- Counter -->
                <div class="col-xl-4 col-md-4">
                    <div class="counter">
                        <div class="counter-wrapper bg-primary">
                            <i class="counter-icon flaticon-teacher"></i>
                            <!-- insert your final value on data-count= -->
                            <div class="counter-value" data-count="30">0</div>
                            <h3 class="title">Professionals</h3>
                        </div>
                    </div>
                    <!-- /counter -->
                </div>
                <!-- /col-lg -->
                <!-- Counter -->
                <div class="col-xl-4 col-md-4">
                    <div class="counter">
                        <div class="counter-wrapper bg-secondary">
                            <i class="counter-icon  flaticon-family"></i>
                            <!-- insert your final value on data-count= -->
                            <div class="counter-value" data-count="74">0</div>
                            <h3 class="title">Happy parents</h3>
                        </div>
                    </div>
                    <!-- /counter -->
                </div>
                <!-- /col-lg -->
                <!-- Counter -->
                <div class="col-xl-4 col-md-4">
                    <div class="counter">
                        <div class="counter-wrapper bg-tertiary">
                            <i class="counter-icon flaticon-children"></i>
                            <!-- insert your final value on data-count= -->
                            <div class="counter-value" data-count="104">0</div>
                            <h3 class="title">Students</h3>
                        </div>
                    </div>
                    <!-- /counter -->
                </div>
                <!-- /col-lg -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /section ends--><!-- section-->
    <section id="team-home" class="container">
        <!-- section heading -->
        <div class="section-heading text-center">
            <h2>Our Team</h2>
            <p class="subtitle">Qualified Professionals</p>
        </div>
        <!-- /section-heading -->
        <div class="row">
            <div class="col-lg-7">
                <h3>Talented Team</h3>
                <p>
                    With Several years of experience in accelerated learning and International Studies, our team of Carefully
                    selected teachers and entire workforce gives our students the best possible support and up-to-date education to better equip the
                    for the current society.
                </p>
                <ul class="checkmark pl-0 font-weight-bold">
                    <li>Over 30 Qualified professionals</li>
                    <li>We offer you our quality services since 2021</li>
                    <li>Fun and educational activities in our daily plan</li>
                </ul>
                <!-- /ul-->
                <div class=" col-md-12">
                    <a href="{{route('team')}}" class="btn btn-primary ">Team Members</a>
                </div>
            </div>

            <!-- /col-lg-->
            <div class="col-lg-5 res-margin">
                <img src="{{asset('assets2/img/team/team-home.jpg')}}" alt="" class="img-fluid blob2">
                <!-- ornament starts-->
                <div class="ornament-stars" data-aos="fade-down"></div>
            </div>
            <!-- /col-lg-->
            <div class="col-lg-12">
                <!-- team carousel -->
                <div class="carousel-4items owl-carousel owl-theme mt-5">
                    <!-- Team member 1 -->
                    <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                            <a href="team-single.html">
                                <img src="{{asset('assets2/img/team/team1.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <!-- social icons -->
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                            <a href="team-single.html">
                                <h6 style="font-size:16px!important" class="title">MR. PATRICK MUNDI</h6>
                            </a>
                            <span class="post">Chairman</span>
                            {{--                            <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>--}}
                        </div>
                        <!-- /team-content -->
                    </div>
                    <!-- /team-style1 -->
                    <!-- Team member 2 -->
                    <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                            <a href="team-single.html">
                                <img src="{{asset('assets2/img/team/team2.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <!-- social icons -->
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                            <a href="team-single.html">
                                <h6 style="font-size:16px!important" class="title">MRS. MUNDI ABBY</h6>
                            </a>
                            <span class="post">Proprietress</span>
                            {{--                            <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>--}}
                        </div>
                        <!-- /team-content -->
                    </div>
                    <!-- /team-style1 -->
                    <!-- Team member 3 -->
                    <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                            <a href="team-single.html">
                                <img src="{{asset('assets2/img/team/team3.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <!-- social icons -->
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                            <a href="team-single.html">
                                <h6 style="font-size:16px!important" class="title">MRS. KALU NGOZI</h6>
                            </a>
                            <span class="post">Administrator</span>
                            {{--                            <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>--}}
                        </div>
                        <!-- /team-content -->
                    </div>
                    <!-- /team-style1 -->
                    <!-- Team member 4 -->
                    <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                            <a href="team-single.html">
                                <img src="{{asset('assets2/img/team/team4.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <!-- social icons -->
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                            <a href="team-single.html">
                                <h6 style="font-size:16px!important" class="title">MR DANIEL LOKOSSOU</h6>
                            </a>
                            <span class="post">Administrator</span>
                            {{--                            <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>--}}
                        </div>
                        <!-- /team-content -->
                    </div>
                    <!-- /team-style1 -->
                    <!-- Team member 5 -->
                    <!-- Team member 6 -->
                    <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                            <a href="team-single.html">
                                <img src="{{asset('assets2/img/team/team6.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <!-- social icons -->
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                            <a href="team-single.html">
                                <h6 style="font-size:16px!important" class="title">MRS. ABRAHAM</h6>
                            </a>
                            <span class="post">Asssitant Teacher</span>
                            {{--                            <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>--}}
                        </div>
                        <!-- /team-content -->
                    </div>
                    <!-- Team member 7 -->
                    <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                            <a href="team-single.html">
                                <img src="{{asset('assets2/img/team/team7.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <!-- social icons -->
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                            <a href="team-single.html">
                                <h6 style="font-size:16px!important" class="title">MS. DAVID REBECCA</h6>
                            </a>
                            <span class="post">Teacher</span>
                            {{--                            <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>--}}
                        </div>
                        <!-- /team-content -->
                    </div>
                    <!-- Team member 8 -->
                    <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                            <a href="team-single.html">
                                <img src="{{asset('assets2/img/team/team8.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <!-- social icons -->
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                            <a href="team-single.html">
                                <h6 style="font-size:16px!important" class="title">MRS DAIRO GRACE</h6>
                            </a>
                            <span class="post">Teacher</span>
                            {{--                            <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>--}}
                        </div>
                        <!-- /team-content -->
                    </div>
                    <!-- Team member 9 -->
                    <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                            <a href="team-single.html">
                                <img src="{{asset('assets2/img/team/team9.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <!-- social icons -->
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                            <a href="team-single.html">
                                <h6 style="font-size:16px!important" class="title">MRA AKINTOLA</h6>
                            </a>
                            <span class="post">Teacher</span>
                            {{--                            <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>--}}
                        </div>
                        <!-- /team-content -->
                    </div>
                    <!-- Team member 10 -->
                    <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                            <a href="team-single.html">
                                <img src="{{asset('assets2/img/team/team10.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <!-- social icons -->
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                            <a href="team-single.html">
                                <h6 style="font-size:16px!important" class="title">MR. OGBONNAYA IKUAGWU</h6>
                            </a>
                            <span class="post">Teacher</span>
                            {{--                            <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>--}}
                        </div>
                        <!-- /team-content -->
                    </div>
                    <!-- Team member 11 -->
                    <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                            <a href="team-single.html">
                                <img src="{{asset('assets2/img/team/team11.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <!-- social icons -->
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                            <a href="team-single.html">
                                <h6 style="font-size:16px!important" class="title">MR. ABDULLAWAL ABDULWAHAB</h6>
                            </a>
                            <span class="post">Teacher</span>
                            {{--                            <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>--}}
                        </div>
                        <!-- /team-content -->
                    </div>
                    <!-- Team member 12 -->
                    <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                            <a href="team-single.html">
                                <img src="{{asset('assets2/img/team/team12.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <!-- social icons -->
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                            <a href="team-single.html">
                                <h6 style="font-size:16px!important" class="title">MRS. AYODELE</h6>
                            </a>
                            <span class="post">Teacher</span>
                            {{--                            <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>--}}
                        </div>
                        <!-- /team-content -->
                    </div>

                    <!-- Team member 13 -->
                    <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                            <a href="team-single.html">
                                <img src="{{asset('assets2/img/team/team13.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <!-- social icons -->
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                            <a href="team-single.html">
                                <h6 style="font-size:16px!important" class="title">MR. OGUNFUNWA EMMANUEL</h6>
                            </a>
                            <span class="post">Teacher</span>
                            {{--                            <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>--}}
                        </div>
                        <!-- /team-content -->
                    </div>
                    <!-- /team-style1 -->
                </div>
                <!-- /owl-team-->
            </div>
            <!-- /col-lg-->
        </div>
        <!-- /row-->
    </section>
    <!-- /section ends-->
    <!-- section -->
    <section id="gallery-home" class="container-fluid bg-tertiary no-bg-sm">
        <div class="container">
            <!-- section heading -->
            <div class="section-heading text-center text-light">
                <h2>Gallery</h2>
                <p class="subtitle">Our facilities</p>
            </div>
            <!-- /section-heading -->
            <!-- centered Gallery navigation -->
            <ul class="nav nav-pills category-isotope center-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-toggle="tab" data-filter="*">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="tab" data-filter=".school">Our School</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="tab" data-filter=".activities">Activities</a>
                </li>
            </ul>
            <!-- /ul -->
            <!-- Gallery -->
            <div id="gallery-isotope" class="row mt-5 magnific-popup">
                <!-- Image 1 -->
                <div class="col-sm-6 col-md-6 col-lg-4 activities">
                    <div class="portfolio-item">
                        <div class="gallery-thumb">
                            <img class="img-fluid " src="{{asset('assets2/img/gallery/gallery1.jpg')}}" alt="">
                            <span class="overlay-mask"></span>
                            <a href="{{asset('assets2/img/gallery/gallery1.jpg')}}" class="link centered"
                               title="You can add caption to pictures.">
                                <i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Image 2 -->
                <div class="col-sm-6 col-md-6 col-lg-4 school">
                    <div class="portfolio-item">
                        <div class="gallery-thumb">
                            <img class="img-fluid " src="{{asset('assets2/img/gallery/gallery2.jpg')}}" alt="">
                            <span class="overlay-mask"></span>
                            <a href="{{asset('assets2/img/gallery/gallery2.jpg')}}" class="link centered"
                               title="You can add caption to pictures.">
                                <i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Image 3 -->
                <div class="col-sm-6 col-md-6 col-lg-4 school">
                    <div class="portfolio-item">
                        <div class="gallery-thumb">
                            <img class="img-fluid " src="{{asset('assets2/img/gallery/gallery3.jpg')}}" alt="">
                            <span class="overlay-mask"></span>
                            <a href="{{asset('assets2/img/gallery/gallery3.jpg')}}" class="link centered"
                               title="You can add caption to pictures.">
                                <i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Image 4 -->
                <div class="col-sm-6 col-md-6 col-lg-4 activities">
                    <div class="portfolio-item">
                        <div class="gallery-thumb">
                            <img class="img-fluid " src="{{asset('assets2/img/gallery/gallery4.jpg')}}" alt="">
                            <span class="overlay-mask"></span>
                            <a href="{{asset('assets2/img/gallery/gallery4.jpg')}}" class="link centered"
                               title="You can add caption to pictures.">
                                <i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Image 5 -->
                <div class="col-sm-6 col-md-6 col-lg-4 school">
                    <div class="portfolio-item">
                        <div class="gallery-thumb">
                            <img class="img-fluid " src="{{asset('assets2/img/gallery/gallery5.jpg')}}" alt="">
                            <span class="overlay-mask"></span>
                            <a href="{{asset('assets2/img/gallery/gallery5.jpg')}}" class="link centered"
                               title="You can add caption to pictures.">
                                <i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Image 6 -->
                <div class="col-sm-6 col-md-6 col-lg-4 school">
                    <div class="portfolio-item">
                        <div class="gallery-thumb">
                            <img class="img-fluid " src="{{asset('assets2/img/gallery/gallery6.jpg')}}" alt="">
                            <span class="overlay-mask"></span>
                            <a href="{{asset('assets2/img/gallery/gallery6.jpg')}}" class="link centered"
                               title="You can add caption to pictures.">
                                <i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Image 7 -->
                <div class="col-sm-6 col-md-6 col-lg-4 activities">
                    <div class="portfolio-item">
                        <div class="gallery-thumb">
                            <img class="img-fluid " src="{{asset('assets2/img/gallery/gallery7.jpg')}}" alt="">
                            <span class="overlay-mask"></span>
                            <a href="{{asset('assets2/img/gallery/gallery7.jpg')}}" class="link centered"
                               title="You can add caption to pictures.">
                                <i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Image 8 -->
                <div class="col-sm-6 col-md-6 col-lg-4 activities">
                    <div class="portfolio-item">
                        <div class="gallery-thumb">
                            <img class="img-fluid " src="{{asset('assets2/img/gallery/gallery8.jpg')}}" alt="">
                            <span class="overlay-mask"></span>
                            <a href="{{asset('assets2/img/gallery/gallery8.jpg')}}" class="link centered"
                               title="You can add caption to pictures.">
                                <i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Image 9 -->
                <div class="col-sm-6 col-md-6 col-lg-4 school">
                    <div class="portfolio-item">
                        <div class="gallery-thumb">
                            <img class="img-fluid " src="{{asset('assets2/img/gallery/gallery9.jpg')}}" alt="">
                            <span class="overlay-mask"></span>
                            <a href="{{asset('assets2/img/gallery/gallery9.jpg')}}" class="link centered"
                               title="You can add caption to pictures.">
                                <i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Image 10 -->
                <div class="col-sm-6 col-md-6 col-lg-4 school">
                    <div class="portfolio-item">
                        <div class="gallery-thumb">
                            <img class="img-fluid " src="{{asset('assets2/img/gallery/gallery10.jpg')}}" alt="">
                            <span class="overlay-mask"></span>
                            <a href="{{asset('assets2/img/gallery/gallery10.jpg')}}" class="link centered"
                               title="You can add caption to pictures.">
                                <i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Image 11 -->
                <div class="col-sm-6 col-md-6 col-lg-4 school">
                    <div class="portfolio-item">
                        <div class="gallery-thumb">
                            <img class="img-fluid " src="{{asset('assets2/img/gallery/gallery11.jpg')}}" alt="">
                            <span class="overlay-mask"></span>
                            <a href="{{asset('assets2/img/gallery/gallery11.jpg')}}" class="link centered"
                               title="You can add caption to pictures.">
                                <i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Image 12 -->
                <div class="col-sm-6 col-md-6 col-lg-4 school">
                    <div class="portfolio-item">
                        <div class="gallery-thumb">
                            <img class="img-fluid " src="{{asset('assets2/img/gallery/gallery12.jpg')}}" alt="">
                            <span class="overlay-mask"></span>
                            <a href="{{asset('assets2/img/gallery/gallery12.jpg')}}" class="link centered"
                               title="You can add caption to pictures.">
                                <i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /gallery-isotope-->       </div>
        <!-- /container-->
    </section>
    <!-- /section ends -->
    <!-- section -->
{{--        @include('home.blog')--}}
    <!-- /section ends-->
    <!-- section -->
    <section id="callout" class=" container-fluid bg-fixed">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-6 p-0" data-start="right: 50%;"
                     data-center="right:-5%;">
                    <!-- image  -->
                    <img src="{{asset('assets2/img/call-to-action/calltoactionbg.jpg')}}" class="img-fluid img-rounded"
                         alt="">
                </div>
                <!-- text box  -->
                <div class="col-lg-6 bg-secondary p-5 justify-content-center align-self-center" data-start="left: 50%;"
                     data-center="left:-5%;">
                    <div class="text-light justify-content-center align-self-center">
                        <h3>Enroll Today</h3>
                        <p>
                            Come in and be part of this Educational Revolution in Nigeria and Africa; We equip our pupils/students
                            not only to pass properly where necessary but also to ensure to fit into any class, space and desired career path;
                        </p>
                        <a href="{{route('contact')}}" class="btn btn-tertiary">Contact us</a>
                    </div>
                    <!-- /text-light  -->
                </div>
                <!-- /col-lg  -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /section ends -->
    <!-- Section -->
    <section id="contact-home" class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <!-- section heading -->
                <div class="section-heading text-center">
                    <h2>Contact Us</h2>
                    <p class="subtitle">Get in Touch</p>
                </div>
                <!-- /section-heading -->
                <!-- contact info boxes start-->
                <div class="contact-info res-margin">
                    <div class="row res-margin">
                        <div class="col-lg-4">
                            <div class="contact-icon bg-secondary text-light">
                                <!---icon-->
                                <i class="fa fa-envelope top-icon"></i>
                                <!-- contact-icon info-->
                                <div class="contact-icon-info">
                                    <h5>Write us</h5>
                                    <p><a href="mailto:info@mundicollege.com">info@mudicollege.com</a></p>
                                </div>
                            </div>
                            <!-- /contact-icon-->
                        </div>
                        <!-- /col-lg-->
                        <div class="col-lg-4 res-margin">
                            <div class="contact-icon bg-secondary text-light">
                                <!---icon-->
                                <i class="fa fa-map-marker top-icon"></i>
                                <!-- contact-icon info-->
                                <div class="contact-icon-info">
                                    <h5>Visit us</h5>
                                    <p>Road H, Righteous CDA, Ogun State</p>
                                </div>
                            </div>
                            <!-- /contact-icon-->
                        </div>
                        <!-- /col-lg -->
                        <div class="col-lg-4 res-margin">
                            <div class="contact-icon bg-secondary text-light">
                                <!---icon-->
                                <i class="fa fa-phone top-icon"></i>
                                <!-- contact-icon info-->
                                <div class="contact-icon-info">
                                    <h5>Call us</h5>
                                    <p>(+234) 8101033541</p>
                                </div>
                            </div>
                            <!-- /contact-icon-->
                        </div>
                        <!-- /col-lg-->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /contact-info-->
            </div>
            <!-- /col-lg-->
            <!--notepad -->
            <div class="col-lg-12 mt-5 block-padding force notepad pl-5 pr-5">
                <div class="row">
                    <div class="col-lg-7">
                        <!-- contact-info-->
                        <h4>Send us a message</h4>
                        <!-- Form Starts -->

                        <form action="{{route('message_us')}}" method="post">
                            @csrf

                            <div id="contact_form">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Name<span class="required">*</span></label>
                                            <input type="text" name="sender" class="form-control input-field" placeholder="Enter Full Name" required="required">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input type="email" name="email" class="form-control input-field" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Subject</label>
                                            <input type="text" name="subject" class="form-control input-field">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Message<span class="required">*</span></label>
                                            <textarea name="message" id="message" class="textarea-field form-control"
                                                      rows="3" required=""></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" id="submit_btn" value="Submit" class="btn btn-tertiary">Send
                                        message
                                    </button>
                                </div>
                                <!-- /form-group-->
                                <!-- Contact results -->
                                <div id="contact_results"></div>
                            </div>
                        </form>
                        <!-- /contact-form-->
                    </div>
                    <!-- /contact-info-->
                    <div class="col-lg-5">
                        <!-- map-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.943078758366!2d3.1993174139147644!3d6.653977723480879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9f1ec27b6c0d%3A0x6dc96f8267a7099a!2sMUNDI%20COLLEGE%2C%20OTA!5e0!3m2!1sen!2sng!4v1673659084440!5m2!1sen!2sng"
                                width="100%" height="450" style="border:0;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <!-- ornament starts-->
                    <div class="ornament-stars mt-8" data-aos="zoom-out"></div>
                </div>
                <!-- /row-->
            </div>
            <!-- /col-lg-->
        </div>
        <!-- /.row-->
    </section>


@endsection
