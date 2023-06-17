@extends('layouts.appadmin')
@section('content')

    <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-middle">
            <h4 class="m-0 font-weight-bold text-primary">Data Lowongan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive justify-content-between">
            <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Unit</th>
                        <th>Syarat</th>
                        <th>Deskripsi</th>
                        <th class="text-center">Jumlah Pendaftar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lowongan as $data)
                        <tr>
                            <td>{{$data->judul}}</td>
                            <td>{{$data->unit->nama}}</td> 
                            <td>{{$data->syarat}}</td>
                            <td>{{$data->deskripsi}}</td>
                            <td class="text-center">{{$data->jml_pendaftar}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
