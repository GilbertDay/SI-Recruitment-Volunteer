@extends('layouts.appadmin')
@section('content')

    <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-middle">
            <h4 class="m-0 font-weight-bold text-primary">Data Lowongan</h6>
            <a href="/formlowongan" type="button" class="btn btn-primary">Tambah Lowongan</a>
    </div>
    <div class="card-body">
        <div class="table-responsive justify-content-between">
            <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Judul</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lowongan as $data)
                        @if($data->status == 0 )
                            <tr>
                                <td>{{$data['judul']}}</td>
                                <th class="w-25 px-3">
                                    <a href="/delete/{{$data->id}}" action="/deletelowongan" >
                                        <button type="button" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger float-right mr-3">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </a>
                                    <a href="/formEditLowongan/{{$data->id}}">
                                        <button type="button" class="btn btn-warning float-right mr-3">
                                            <i class="bi bi-pen"></i>
                                        </button>
                                    </a>
                                </th>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-middle">
            <h4 class="m-0 font-weight-bold text-primary">Lowongan Aktif</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive justify-content-between">
            <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th class="w-25"> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lowongan as $data)
                    @if($data->status == 1)
                    <tr>
                        <td>{{$data['judul']}}</td>
                        <th class="w-25 px-3">
                            <a href="/delete/{{$data->id}}" action="/deletelowongan" >
                                <button type="button" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger float-right mr-3">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </a>
                            <a href="/formEditLowongan/{{$data->id}}">
                                <button type="button" class="btn btn-warning float-right mr-3">
                                    <i class="bi bi-pen"></i>
                                </button>
                            </a>
                        </th>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
