@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-6 col-12">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$total_berita}}</h3>
                        <p>News</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <a href="/news" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-12">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$total_author}}</h3>
                        <p>Author</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <a href="/author" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection