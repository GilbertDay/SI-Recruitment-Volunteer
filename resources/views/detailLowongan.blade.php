@extends('layouts.app')

@section('content')
    <!-- job post company Start -->
    <div class="job-post-company pt-50 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                @foreach($detaillowongan as $data)
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                <a href="#"><img src="{{asset('assets/img/icon/job-list1.png')}}" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{$data['judul']}}</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                        <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            <p>{{$data['deskripsi']}}</p>
                        </div>
                        <div class="post-details2  mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Syarat</h4>
                            </div>
                            @foreach ($syaratArray as $syarat)
                            <ul>
                                @foreach ($syarat as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                            @endforeach
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Job Overview</h4>
                        </div>
                        <ul>
                            <li>Posted date : <span>{{$data['tanggal_buka']}}</span></li>
                            <li>Jenis Pekerjaan : <span>{{$data['jenis']}}</span></li>
                            <li>Jumlah Pendaftar : <span>{{$data['jml_pendaftar']}}</span></li>
                            <li>Application date : <span>{{$data['tanggal_tutup']}}</span></li>
                        </ul>
                        <div class="apply-btn2">
                        <a href="/apply/{{$data['id']}}" class="btn">Apply Now</a>
                        </div>
                    </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Company Information</h4>
                        </div>
                            <span>{{$data['nama']}}</span>
                            <p>{{$data['deskripsi_unit']}}</p>
                        <ul>
                            <li>Name: <span>{{$data->unit->nama}}</span></li>
                            <li>Email: <span>{{$data->unit->email}}</span></li>
                            <li>No Telp: <span>{{$data->unit->no_telp}}</span></li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- job post company End -->
@endsection
