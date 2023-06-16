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
                                    <th>CV</th>
                                    <th>Transkrip Nilai</th>
                                    <th>Status</th>
                                    <th>Jadwal Wawancara</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lamaran as $data)
                                <tr>
                                    <td>
                                        <h6>{{$data->lowongan->judul}}</h6>
                                    </td>
                                    <td><a href="/cv/{{$data->cv}}" target="_blank" class="text-danger">View</a></td>
                                    <td><a href="/transkrip/{{$data->transkrip_nilai}}" target="_blank"
                                            class="text-danger">View</a></td>
                                    <td>
                                        <div
                                            class="{{ $data->status == 0 ? 'text-info' : ($data->status == 1 ? 'text-success' : 'text-danger')}}">
                                            {{ $data->status == 0 ? 'Proses' : ($data->status == 1 ? 'Diterima' : 'Ditolak')}}
                                        </div>
                                    </td>
                                    <td>
                                        <h6>{{$data->lowongan->jadwal_wawancara}}</h6>
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
