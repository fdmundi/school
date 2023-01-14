@extends('layouts.web')

@section('content')
    <!-- page wrapper starts -->
    <div id="page-wrapper"><!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <!-- jumbo-heading -->
                <div class="jumbo-heading" data-aos="fade-down">
                    <h1>Contact</h1>
                    <!-- Breadcrumbs -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
        <div class="page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h3>Contact Information</h3>
                        <p>In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum
                            ipsum convall.</p>
                        <p>
                            <!-- contact icons-->
                        <ul class="list-inline mt-3 list-contact colored-icons">
                            <li class="list-inline-item"><i class="fa fa-envelope margin-icon"></i><a
                                    href="mailto:email@yoursite.com">email@yoursite.com</a></li>
                            <li class="list-inline-item"><i class="fa fa-phone margin-icon"></i>(123) 456-789</li>
                            <li class="list-inline-item"><i class="fa fa-map-marker margin-icon"></i>Street Name 123 -
                                New York
                            </li>
                        </ul>
                        <!-- /list-->
                        <!-- map-->
                        <div id="map-canvas" class="mt-5"></div>
                        <!-- /map-->
                    </div>
                    <!-- /col-lg- -->
                    <!-- contact box -->
                    <div class="col-lg-4 contact-form3 offset-lg-1 bg-light h-100">
                        <div class="contact-image bg-light">
                            <!-- envelope icon-->
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5 class="text-center mt-3">Send us a message</h5>
                        <!-- Form Starts -->
                        <div id="contact_form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Name<span class="required">*</span></label>
                                        <input type="text" name="name" class="form-control input-field" required="">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" name="email" class="form-control input-field" required="">
                                    </div>
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
                                <!-- button -->
                                <button type="submit" id="submit_btn" value="Submit"
                                        class="btn btn-primary btn-block mt-3">Send message
                                </button>
                            </div>
                            <!-- /form-group-->
                            <!-- Contact results -->
                            <div id="contact_results"></div>
                        </div>
                        <!-- /contact-form-->
                    </div>
                    <!-- /col-lg-->
                </div>
                <!-- /row -->
            </div>
            <!-- /container --></div>
        <!-- /page --></div>
    <!--/ page-wrapper -->
@endsection
