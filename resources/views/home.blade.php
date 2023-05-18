<!doctype html>
<html class="no-js" lang="zxx">

<head>

</head>
@extends('layouts.app')

@section('content')
<!-- Preloader Start -->
<main>
    <div class="online-cv cv-bg section-overly pt-90 pb-120" data-background="assets/img/gallery/cv_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="cv-caption text-center">
                        <p class="pera1">SISTEM INFORMASI VOLUNTEER</p>
                        <p class="pera2"> Selamat Datang Di Website E-Recruitment Volunteer UKDW</p>
                        <a href="#lowongan" class="border-btn2 border-btn4">Lihat Lowongan Terbaru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Online CV Area End-->
    <!-- Our Services Start -->
    <div class="our-services mt-4">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>UNIT</span>
                        <h2>Unit Terdaftar</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-contnet-center">
                @foreach($unit as $data)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">{{$data['nama']}}</a></h5>
                            <span>({{$data['no_telp']}})</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- More Btn -->
            <!-- Section Button -->
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="browse-btn2 text-center mt-50">
                        <a href="job_listing.html" class="border-btn2">Browse All Sectors</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Our Services End -->
    <!-- Online CV Area Start -->

    <!-- Featured_job_start -->
    <section class="featured-job-area feature-padding" id="lowongan">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Terbaru</span>
                        <h2>Lowongan Tersedia</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <!-- single-job-content -->
                    @foreach($lowongan as $data)
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="/lowongandetail/{{$data['id_lowongan']}}"><img src="assets/img/icon/job-list1.png" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="/lowongandetail/{{$data['id_lowongan']}}">
                                    <h4>{{$data['judul']}}</h4>
                                </a>
                                <ul>
                                    <li>{{$data['tanggal_buka']}} sampai {{$data['tanggal_tutup']}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="/lowongandetail/{{$data['id_lowongan']}}">{{$data['jenis']}}</a>
                        </div>
                    </div>
                    @endforeach

                    <!-- single-job-content -->

                </div>
            </div>
        </div>
    </section>
    <!-- Featured_job_end -->
    <!-- How  Apply Process Start-->
    <div class="apply-process-area apply-bg pt-100 pb-150" data-background="assets/img/gallery/how-applybg.png">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle white-text text-center">
                        <span>Proses Daftar</span>
                        <h2> Bagaimana cara mendaftar?
                        </h2>
                    </div>
                </div>
            </div>
            <!-- Apply Process Caption -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-search"></span>
                        </div>
                        <div class="process-cap">
                            <h5>1. Cari Lowongan yang tersedia</h5>
                            <p>Anda bisa melihat di daftar lowongan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-curriculum-vitae"></span>
                        </div>
                        <div class="process-cap">
                            <h5>2. Apply pada lowongan</h5>
                            <p>Silahkan melakukan apply pada lowongan jika syarat terpenuhi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="process-cap">
                            <h5>3. Dapatkan pekerjaan anda</h5>
                            <p>Jika anda sesuai kriteria yang dibutuhkan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How  Apply Process End-->
    @endsection
