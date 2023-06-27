@extends('layouts.appadmin')
@section('content')
@foreach($lowongan as $item)
@if($item->status == 1)
@php
$syarat = explode(',', $item->syarat);
@endphp
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-middle">
        <h4 class="m-0 font-weight-bold text-primary">Arsip Pelamar (Di Tolak) {{$item->judul}}</h6>
    </div>

    <!-- Modal -->

    <div class="card-body">
        <div class="table-responsive justify-content-between">
            <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Pelamar</th>
                        <th>Email</th>
                        @if(in_array('CV',$syarat))
                        <th>CV</th>
                        @endif
                        @if(in_array('Transkrip Nilai',$syarat))
                        <th>Transkrip Nilai</th>
                        @endif

                    </tr>
                </thead>
                <tbody>
                    @foreach($pelamar as $data)
                    @if($item->user_id == $data->lowongan->user_id && $data->lowongan->judul == $item->judul)
                    <tr>
                        <td>{{$data->user->name}}</td>
                        <td>{{$data->user->email}}</td>
                        @if(in_array('CV',$syarat))
                        <td><a href="/cvAdmin/{{$data->cv}}" target="_blank"><button type="button"
                                    class="btn btn-info">Lihat CV</button></a></td>
                        @endif
                        @if(in_array('Transkrip Nilai',$syarat))
                        <td><a href="/transkripAdmin/{{$data->transkrip_nilai}}" target="_blank"><button type="button"
                                    class="btn btn-info">Lihat Transkrip Nilai</button></a></td>
                        @endif
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif
@endforeach
@endsection
