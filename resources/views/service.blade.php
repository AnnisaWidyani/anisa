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
                        <h2>Service</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Service</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
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
                            <p>
                                Rp 250.000/8 kali pertemuan 
                            </p>
                            <a class="btn" href="">pilih</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="./index_files/img/biola.jfif" alt="Image">
                            </div>
                            <h3>Kursus Biola</h3>
                            <p>
                                Rp 250.000/8 kali pertemuan
                            </p>
                            <a class="btn" href="">pilih</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="./index_files/img/vocal.jpg" alt="Image">
                            </div>
                            <h3>Kursus Vocal</h3>
                            <p>
                                Rp 250.000/4 kali pertemua
                            </p>
                            <a class="btn" href="">pilih</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
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
                                    <p><i class="fa fa-map-marker-alt"></i>>Malang, Kode Pos 65151</p>
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