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
                        <a href="/news" class="nav-item nav-link">Admin</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
@endsection

@section('page-header')
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
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
                            <p>
                                Kepuasan anda adalah kepuasan kami. 
                            </p>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
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