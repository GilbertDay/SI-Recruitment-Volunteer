@extends('layouts.appadmin')
@section('content')
@foreach($lowongan as $item)
@if($item->status == 1)
@php
$syarat = explode(',', $item->syarat);
@endphp
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-middle">
        <h4 class="m-0 font-weight-bold text-primary">Data Lowongan {{$item->judul}}</h6>
    </div>

    <!-- Modal -->

    <div class="card-body">
        <div class="table-responsive justify-content-between">
            <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Pelamar</th>
                        <th>Email</th>
                        <th>Aksi</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($daftarPelamar as $data)
                    @if($item->user_id == $data->lowongan->user_id && $data->lowongan->judul == $item->judul
                    && $data->status == 0 )
                    <tr>
                        <td>{{$data->user->name}}</td>
                        <td>{{$data->user->email}}</td>
                        <th>
                            <!-- Example single danger button -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/terimaPelamar/{{$data->id}}">Terima</a>
                                    <a class="dropdown-item" href="/tolakPelamar/{{$data->id}}">Tolak</a>
                                </div>
                            </div>
                        </th>
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
