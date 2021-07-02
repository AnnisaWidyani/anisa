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
                        <h2>Price</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Price</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
@endsection

@section('price')
        <!-- Pricing Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Best Product</p>
                    <h2>Products at Affordable Prices</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="./index_files/img/violin-3122660_960_720.jpg" alt="Image">
                            </div>
                            <div class="price-text">
                                <h2>Violin</h2>
                                <h3>Rp 650.000</h3>
                                <a href="/violin1"><h3>Read More</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="./index_files/img/chair_chord_close_up_2043571.jpg" alt="Image">
                            </div>
                            <div class="price-text">
                                <h2>Piano</h2>
                                <h3>Rp 10.500.000</h3>
                                <a href="/piano1"><h3>Read More</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="./index_files/img/gitar.jpg" alt="Image">
                            </div>
                            <div class="price-text">
                                <h2>Gitar</h2>
                                <h3>Rp 2.000.000</h3>
                                <a href="/gitar1"><h3>Read More</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="./index_files/img/images.jpg" alt="Image">
                            </div>
                            <div class="price-text">
                                <h2>Drum</h2>
                                <h3>Rp 8.150.000</h3>
                                <a href="/drum1"><h3>Read More</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="./index_files/img/hmmmm.jpg" alt="Image">
                            </div>
                            <div class="price-text">
                                <h2>Terompet</h2>
                                <h3>Rp 700.000</h3>
                                <a href="/terompet1"><h3>Read More</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="./index_files/img/flute.jpg" alt="Image">
                            </div>
                            <div class="price-text">
                                <h2>Flute</h2>
                                <h3>Rp 500.000</h3>
                                <a href="/flute1"><h3>Read More</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="./index_files/img/full5.jpg" alt="Image">
                            </div>
                            <div class="price-text">
                                <h2>Kontrabass</h2>
                                <h3>Rp 7.000.000</h3>
                                <a href="/kontrabass1"><h3>Read More</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="./index_files/img/harpa.jpg" alt="Image">
                            </div>
                            <div class="price-text">
                                <h2>Harpa</h2>
                                <h3>Rp 2.500.000</h3>
                                <a href="/harpa1"><h3>Read More</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing End -->
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