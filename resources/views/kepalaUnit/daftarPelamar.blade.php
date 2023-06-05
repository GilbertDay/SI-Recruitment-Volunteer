@extends('layouts.appadmin')
@section('content')
@foreach($lowongan as $item)
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-middle">
                <h4 class="m-0 font-weight-bold text-primary">Data Lowongan {{$item->judul}}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive justify-content-between">
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Pelamar</th>
                            <th>Email</th>
                            <th>IPK</th>
                            <th>Semester</th>
                            <th>CV</th>
                            <th>Transkrip Nilai</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($daftarPelamar as $data)
                            @if($item->user_id == $data->lowongan->user_id && $data->lowongan->judul == $item->judul)
                                <tr>
                                    <td>{{$data->user->name}}</td>
                                    <td>{{$data->user->email}}</td>
                                    <td>{{$data->ipk}}</td>
                                    <td>{{$data->semester}}</td>
                                    <td><a href="/cv/{{$data->cv}}" target="_blank"><button type="button" class="btn btn-info">Lihat CV</button></a></td>
                                    <td><a href="/transkrip/{{$data->transkrip_nilai}}" target="_blank"><button type="button" class="btn btn-info">Lihat Transkrip Nilai</button></a></td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endforeach
@endsection
