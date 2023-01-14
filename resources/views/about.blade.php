@extends('layouts.web')

@section('content')
    <!-- page wrapper starts -->
    <div id="page-wrapper"><!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <!-- jumbo-heading -->
                <div class="jumbo-heading" data-aos="fade-down">
                    <h1>ABOUT MUNDI COLLEGE</h1>
                    <!-- Breadcrumbs -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About us</li>
                        </ol>
                    </nav>
                    <!-- /breadcrumb -->
                </div>
                <!-- /jumbo-heading -->
            </div>
            <!-- /container -->
        </div>
        <!-- /jumbotron -->
        <!-- ==== Page Content ==== -->
        <div class="container block-padding">
            <!--row -->
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
                        <div class="col-lg-4">
                            <img src="{{asset('assets2/img/about/about1.jpg')}}" class="img-fluid blob" alt="">
                            <!-- ornament starts-->
                            <div class="ornament-stars aos-init aos-animate"></div>
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
            </section>
            <!-- /col-lg-->
            <!-- notepad -->
            <div class="col-lg-12">
                <div class="notepad mt-5" data-aos="zoom-out">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('assets2/img/about/about3.jpg')}}"
                                 class="img-fluid rounded rotate1" alt="">
                        </div>
                        <!-- /col-lg-->
                        <div class="col-lg-8">
                            <h4 class="mt-3">Our Educational Plan</h4>
                            <p class="res-margin">Maecenas at arcu risus. Donec commodo sodales ex, scelerisque
                                laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus
                                leo a dolor placerat, nec elementum ipsum convall.</p>
                            <p>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at arcu
                                risus scelerisque laoree. arcu risus onec comm nec elementum ipsum convall.</p>
                            <a href="contact.html" class="btn btn-tertiary">Contact Us</a>
                        </div>
                        <!-- /col-lg-->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /notepad -->
            </div>
            <!-- /col-lg-->
        </div>
        <!-- /row -->
        <!-- /container -->
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
            <!-- /section ends-->
            <div class="container block-padding">
                <!-- row-->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- accordion -->
                        <div class="accordion">
                            <!-- collapsible accordion 1 -->
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                        Our Mission
                                    </a>
                                </div>
                                <!-- /card-header -->
                                <div id="collapseOne" class="collapse show" data-parent=".accordion">
                                    <div class="card-body">
                                        <p>
                                            Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at
                                            arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id.
                                            In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat,
                                            nec elementum ipsum convall.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /card -->
                            <!-- collapsible accordion 2 -->
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                        Our Vision
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent=".accordion">
                                    <div class="card-body">
                                        <p>
                                            Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at
                                            arcu risus scelerisque laoree.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /card -->
                            <!-- collapsible accordion 3 -->
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                        Coporate Social Responsibilities
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent=".accordion">
                                    <div class="card-body">
                                        <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at
                                            arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id.
                                            In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat,
                                            nec elementum ipsum convall.</p>
                                        <p>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at
                                            arcu risus scelerisque laoree.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /card -->
                        </div>
                        <!-- /accordion -->
                    </div>
                    <!-- /col-lg-->
                    <div class="col-lg-6">
                        <h3 class="res-margin">Qualified Staff</h3>
                        <p class="h7 mt-3 mb-3">Consectetur adipiscing elit. Quisque tincidunt turpis ut sagittis
                            tempor.</p>
                        <p>Etiam vestibulum sit amet nulla vel ornare. Vestibulum vitae turpis ac sapien pharetra
                            facilisis. Curabitur non libero justo. Suspendisse at ultrices velit. Quisque aliquet quis
                            nibh sed feugiat. Curabitur et quam felis. Nulla rhoncus laoreet dolor, et vestibulum sem
                            consectetur a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt
                            turpis ut sagittis tempor.
                        </p>
                        <!-- buttons -->
                        <a href="{{route('contact')}}" class="btn btn-tertiary">Contact Us</a>
                        <a href="{{route('team')}}" class="btn-margin btn btn-quaternary ml-1">Our Team</a>
                    </div>
                    <!-- /col-lg-->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
    <!--/ page-wrapper -->
@endsection
