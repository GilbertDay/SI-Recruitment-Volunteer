@extends('layouts.appadmin')
@section('content')

    <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-middle">
            <h4 class="m-0 font-weight-bold text-primary">Data Lowongan</h6>
            <a href="/formunit" type="button" class="btn btn-primary">Tambah Unit</a>
    </div>
    <div class="card-body">
        <div class="table-responsive justify-content-between">
            <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($unit as $data)
                        @if($data->status == 0 )
                            <tr>
                                <td>{{$data['nama']}}</td>
                                <td>{{$data['email']}}</td>
                                <th class="w-25 px-3">
                                    <a href="/delete/{{$data->user_id}}" action="/deletelowongan" >
                                        <button type="button" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger float-right mr-3">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </a>
                                    <a href="/formEditUnit/{{$data->user_id}}">
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
