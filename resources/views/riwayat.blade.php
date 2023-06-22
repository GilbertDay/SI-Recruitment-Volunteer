@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section-top-border">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Riwayat Lamaran</h4>
                        @if (session('data-ready'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('data-ready') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive mt-4">
                        <table id="basic-table" class="table table-striped mb-0" role="grid">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th style="width: 100px;" class="text-center">CV</th>
                                    <th style="width: 150px;" class="text-center">Transkrip Nilai</th>
                                    <th class="text-center">Verifikasi Berkas</th>
                                    <th class="text-center">Jadwal Wawancara</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lamaran as $data)
                                <tr>
                                    <td>
                                        <h6>{{$data->lowongan->judul}}</h6>
                                    </td>
                                    <td class="text-center">
                                        @if($data->cv)
                                        <a href="/cv/{{$data->cv}}" target="_blank" class="text-danger">View</a>
                                        @else
                                        -
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($data->transkrip_nilai)
                                        <a href="/transkrip/{{$data->transkrip_nilai}}" target="_blank"
                                            class="text-danger">View</a>
                                        @else
                                        -
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div
                                            class="{{ $data->verifikasi_berkas == 0 ? 'text-info' : ($data->verifikasi_berkas == 1 ? 'text-success' : 'text-danger')}}">
                                            {{ $data->verifikasi_berkas == 0 ? 'Proses' : ($data->verifikasi_berkas == 1 ? 'Verified' : 'Ditolak')}}
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        @if($data->jadwal_wawancara)
                                        <h6>{{$data->jadwal_wawancara}}</h6>
                                        @else
                                        -
                                        @endif

                                    </td>
                                    <td class="text-center">
                                        <div
                                            class="{{ $data->status == 0 ? 'text-info' : ($data->status == 1 ? 'text-success' : 'text-danger')}}">
                                            {{ $data->status == 0 ? '-' : ($data->status == 1 ? 'Diterima' : 'Ditolak')}}
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
