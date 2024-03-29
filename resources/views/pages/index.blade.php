@extends('layouts.app1')
    @section('content') 
        <!-- banner -->
        <div class="banner" id="home">
            <div class="layer">
                <div class="container">
                    <div class="banner-text-agile">
                        <div class="row">
                            <div class="col-lg-6 p-0">
                                <!-- banner slider-->
                            <div class="csslider infinity" id="slider1">
                                <input type="radio" name="slides" checked="checked" id="slides_1" />
                                <input type="radio" name="slides" id="slides_2" />
                                <input type="radio" name="slides" id="slides_3" />
                                <ul class="banner_slide_bg">
                                    <li>
                                        <div class="container-fluid">
                                            <div class="w3ls_banner_txt">
                                                <h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Quality Orthodontic </span> Treatments.</h3>
                                                <p class="w3ls_pvt-title my-3">Onec Consequat Sapien Ut Leo Cursus Rhoncus. Nullam Dui Mi, Vulputate Ac 
                                                Metus Semper Nullam Dui Mi. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere 
                                                Cubilia Curae.</p>
                                                <a href="/bookappointment" class="btn btn-banner my-sm-3 mb-3">Read More</a>
                                               
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="container-fluid">
                                            <div class="w3ls_banner_txt">
                                                <h3 class="b-w3ltxt text-capitalize mt-md-4"><span>We care about your</span> Teeth</h3>
                                                <p class="w3ls_pvt-title my-3">Onec Consequat Sapien Ut Leo Cursus Rhoncus. Nullam Dui Mi, Vulputate Ac 
                                                Metus Semper Nullam Dui Mi. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere 
                                                Cubilia Curae.</p>
                                                <a href="about.html" class="btn btn-banner my-sm-3 mb-3">Read More</a>
                                                <a href="contact.html" class="btn btn-banner1 my-sm-3 mb-3">Consult a dentist</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="container-fluid">
                                            <div class="w3ls_banner_txt">
                                                <h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Professionally Trained</span> Dental Staff.</h3>
                                                <p class="w3ls_pvt-title my-3">Onec Consequat Sapien Ut Leo Cursus Rhoncus. Nullam Dui Mi, Vulputate Ac 
                                                Metus Semper Nullam Dui Mi. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere 
                                                Cubilia Curae.</p>
                                                <a href="about.html" class="btn btn-banner my-sm-3 mb-3">Read More</a>
                                                <a href="contact.html" class="btn btn-banner1 my-sm-3 mb-3">Consult a dentist</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="navigation">
                                    <div>
                                        <label for="slides_1"></label>
                                        <label for="slides_2"></label>
                                        <label for="slides_3"></label>
                                    </div>
                                </div>
                            </div>
                            <!-- //banner slider-->
        
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <img src="{{asset('/storage/banner.png')}}" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //banner -->
        
        <!-- about -->
        <section class="about py-5">
            <div class="container py-md-3">
                <h2 class="heading text-center mb-sm-5 mb-4">About Us </h2>
                <div class="row">
                    <div class="col-lg-8">
                        <h4 class="about-left">Be Gentle With The Strongest!</h4>
                        <p class="mt-sm-4 mt-3">Suspendisse id felis sed felis tincidunt finibus. Nulla sed justo tellus. Donec ut felis ante. Quisque ac sapien 
                        quis orci pulvinar finibus quis eu urna. onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam
                        dui mi.	Vestibulum ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur quis.</p>
                        <div class="row mt-4">
                            <div class="col-md-3 col-6">
                                <div class="about-box">
                                    <span class="icon">
                                        <span class="fa fa-birthday-cake"></span>
                                    </span>
                                    <h4>Root Canals</h4>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="about-box">
                                    <span class="icon">
                                        <span class="fa fa-rocket"></span>
                                    </span>
                                    <h4>Teeth Whitening</h4>
                                </div>
                            </div>
                            <!-- .about-box ends here -->
                            <div class="col-md-3 col-6 mt-md-0 mt-4">
                                <div class="about-box">
                                    <span class="icon">
                                        <span class="fa fa-stethoscope"></span>
                                    </span>
                                    <h4>Check-ups</h4>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mt-md-0 mt-4">
                                <div class="about-box">
                                    <span class="icon">
                                        <span class="fa fa-coffee"></span>
                                    </span>
                                    <h4>Dental Exams</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 dental">
                        <img src="{{asset('/storage/tooth.png')}}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- //about -->
        
        <!-- about bottom -->
        <section class="about-bottom pb-5">
            <div class="container pb-lg-3">
                <div class="row bottom-grids">
                    <div class=" col-lg-6">
                        <img src="{{asset('/storage/about.jpg')}}" class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-5">
                        <h4>Routine Dental Exams and Check ups at 30$.</h4>
                        <p class="py-3">Suspendisse id felis sed felis tincidunt finibus. Nulla sed in justo inter tellus. Donec ut felis ante. Quisque acin sapien 
                        quis orci pulvinar finibus quis urna. onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac quis eu urna Quisque quis eu urna lorem elit.</p>
                        <p class="">Quisque ac sapien quis orci pulvinar finibus quis eu urna Quisque Suspendisse id felis sed felis tincidunt finibus.
                        Nulla sed justo tellus. Donec ut felis ante ipsum.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- //about bottom -->
        
        <!-- services -->
        <section class="services py-5">
            <div class="container py-lg-5">
                <h3 class="heading text-center mb-sm-5 mb-4">What we do </h3>
                <div class="row offer-grids">
                    <div class="col-lg-4 col-md-6">
                        <div class="ser1">
                            <div class="bg-layer">
                                <h4 class="">Service1</h4>
                                <p class="mt-3">Vestibulum ante ipsum primiss sed inorc faucibus orcit luctus ipsum et ultrices sede edt posuere cubiliater Curae nisl, Curabit ur quis luctu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="ser2">
                            <div class="bg-layer">
                                <h4 class="">Service2</h4>
                                <p class="mt-3">Vestibulum ante ipsum primiss sed inorc faucibus orcit luctus ipsum et ultrices sede edt posuere cubiliater Curae nisl, Curabit ur quis luctu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="ser3">
                            <div class="bg-layer">
                                <h4 class="">Service3</h4>
                                <p class="mt-3">Vestibulum ante ipsum primiss sed inorc faucibus orcit luctus ipsum et ultrices sede edt posuere cubiliater Curae nisl, Curabit ur quis luctu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4">
                        <div class="ser4">
                            <div class="bg-layer">
                                <h4 class="">Service4</h4>
                                <p class="mt-3">Vestibulum ante ipsum primiss sed inorc faucibus orcit luctus ipsum et ultrices sede edt posuere cubiliater Curae nisl, Curabit ur quis luctu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4">
                        <div class="ser5">
                            <div class="bg-layer">
                                <h4 class="">Service5</h4>
                                <p class="mt-3">Vestibulum ante ipsum primiss sed inorc faucibus orcit luctus ipsum et ultrices sede edt posuere cubiliater Curae nisl, Curabit ur quis luctu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4">
                        <div class="ser6">
                            <div class="bg-layer">
                                <h4 class="">Service6</h4>
                                <p class="mt-3">Vestibulum ante ipsum primiss sed inorc faucibus orcit luctus ipsum et ultrices sede edt posuere cubiliater Curae nisl, Curabit ur quis luctu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //services -->	
        
        
        
        
        <!-- appointment -->
        <section class="appointment text-center py-5">
            <div class="container py-sm-3">
                <h4>make your dream smile a reality</h4>
                <p class="mt-3">Call Us To Book Your Appointment Today</p>
                <a href="contact.html">Contact Us</a>
            </div>
        </section>
        <!-- //appointment -->
        
        <!-- footer -->
        <footer class="py-5">
            <div class="container py-sm-3">
                <div class="row footer-grids">
                    <div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
                        <h4 class="mb-sm-4 mb-3"><span class="fa fa-stethoscope"></span> Dental Health</h4>
                        <p class="mb-3">Onec Consequat sapien ut cursus rhoncus. Nullam dui mi, vulputate ac metus semper quis luctus sed.</p>
                        <h5>Trusted by <span>500+ People</span> </h5>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
                        <h4 class="mb-sm-4 mb-3">Address Info</h4>
                        <p><span class="fa mr-2 fa-map-marker"></span>64d canal street TT 3356 <span>Newyork, NY.</span></p>
                        <p class="phone py-2"><span class="fa mr-2 fa-phone"></span> +1(12) 123 456 789 </p>
                        <p><span class="fa mr-2 fa-envelope"></span><a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                    <div class="col-lg-2 col-sm-6 mb-sm-0 mb-4">
                        <h4 class="mb-sm-4 mb-3">Quick Links</h4>
                        <ul>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li class="my-2"><a href="#">Support Helpline</a></li>
                            <li><a href="#">Healthy Tips</a></li>
                            <li class="mt-2"><a href="#">Privacy Ploicy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <h4 class="mb-sm-4 mb-3">Subscribe Us</h4>
                        <p class="mb-3">Subscribe to our newsletter</p>
                        <form action="#" method="post" class="d-flex">
                            <input type="email" id="email" name="EMAIL" placeholder="Enter your email here" required="">
                            <button type="submit" class="btn">Subscribe</button>
                        </form>
                        <div class="icon-social mt-3">
                            <a href="#" class="button-footr">
                                <span class="fa mx-2 fa-facebook"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa mx-2 fa-twitter"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa mx-2 fa-dribbble"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa mx-2 fa-pinterest"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa mx-2 fa-google-plus"></span>
                            </a>
        
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //footer -->
        
        <!-- copyright -->
        <div class="copyright">
            <div class="container py-4">
                <div class=" text-center">
                    <p>© 2019 Dental Health. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
                </div>
            </div>
        </div>
        <!-- //copyright -->
                
        <!-- move top -->
        <div class="move-top text-right">
            <a href="#home" class="move-top"> 
                <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
            </a>
        </div>
    @endsection
    
