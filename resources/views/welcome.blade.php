@extends('layouts.home')

@section('top-bar')
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-bar-left">
                            <div class="text">
                                <h2>8:00 am - 04:00 pm</h2>
                                <p>Service Hour Mon - Fri</p>
                            </div>
                            <div class="text">
                                <h2>+628 2244 xxx</h2>
                                <p>WhatsApp</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->
@endsection

@section('navbar')
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">AlphaTrees <span>Music</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/about1" class="nav-item nav-link">About</a>
                        <a href="/service1" class="nav-item nav-link">Service</a>
                        <a href="/price1" class="nav-item nav-link">Price</a>
                        <a href="/contact1" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
@endsection

@section('hero')
        <!-- Hero Start -->
        <div class="hero">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-text">
                            <h1>Melayani Jual Beli Alat Musik</h1>
                            <p>
                                Siap melayani jual beli dengan kualitas produk original 
                            </p>
                
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                            <img src="./index_files/img/musicdepan.png" alt="fotodepan Image">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/aTgXgN9fOsk" data-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>
        <!-- Hero End -->
@endsection

@section('modal')
        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
@endsection

@section('about')
        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="./index_files/img/fotoabout.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p>Learn About Us</p>
                            <h2>Store Buying and Selling Trusted Musical Instruments and Courses</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                AlphaTrees berdiri sejak 5 tahun silam bergerak dibidang musik, berawal menyediakan tempat kursus musik kemudian berkembang menyediakan jual berbagai alat musik. 
                            </p>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
@endsection

@section('service')

        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our AlphaTrees Music Services</p>
                    <h2>Kursus Pilihan</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="./index_files/img/fotodepan.jfif" alt="Image">
                            </div>
                            <h3>Kursus Gitar</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="./index_files/img/biola.jfif" alt="Image">
                            </div>
                            <h3>Kursus Biola</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="./index_files/img/vocal.jpg" alt="Image">
                            </div>
                            <h3>Kursus Vocal</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
@endsection

@section('testimonial')
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="./index_files/img/testimonial-1.jpg" alt="Image">
                        <p>
                            Produknya sangat bagus dan harga terjangkau.
                        </p>
                        <h2>Fahri</h2>
                        <h3>mendapat service kursus gitar</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="./index_files/img/testimonial-2.jpg" alt="Image">
                        <p>
                            diajarkan oleh sang ahlinya.
                        </p>
                        <h2>Boy</h2>
                        <h3>kursus biola</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="./index_files/img/testimonial-3.jpg" alt="Image">
                        <p>
                            good.
                        </p>
                        <h2>Chandra</h2>
                        <h3>kursus vocal</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

@endsection

@section('team')
        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Owner Music</p>
                    <h2>Our Team</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="./index_files/img/Annisa.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Annisa Widyani</h2>
                                <h2>201910370311244</h2>
                                <h2>Informatika</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="./index_files/img/Aidia.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Aidia Khoiriyah Firdausy</h2>
                                <h2>201910370311260</h2>
                                <h2>Informatika</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="./index_files/img/Aul.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Aulia Lintang Ayu Kusuma Wardhani</h2>
                                <h2>201910370311267</h2>
                                <h2>Informatika</h2>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
@endsection

@section('contact')
        <!-- Contact Start -->
        <div class="contact">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
@endsection


@section('footer')
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Lokasi AlphaTrees Music</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>Malang, Kode Pos 65151</p>
                                    <p><i class="fa fa-phone-alt"></i>+62 8224 4xxx</p>
                                    <p><i class="fa fa-envelope"></i>info@gmail.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
@endsection