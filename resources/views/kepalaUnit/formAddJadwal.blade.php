@extends('layouts.appadmin')
@section('content')
<div class="card">
    <h5 class="card-header">Featured</h5>
    <div class="card-body">
        <form action="/terimaBerkas/{{$id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <div class="row form-group">
                    <label for="from" class="col-sm-1 col-form-label">Tanggal Wawancara</label>
                    <div class="col-sm-4">
                        <div class="input-group date" id="datepickerbuka">
                            <input name="tanggal" type="text" class="form-control" id="from">
                            <span class="input-group-append">
                                <span class="input-group-text bg-white">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row form-group">
                    <label for="from" class="col-sm-1 col-form-label">Waktu Wawancara</label>
                    <div class="col-sm-4">
                        <div class="input-group date" id="datepickerbuka">
                            <input id="timepicker" class="timepicker form-control" name="waktu" />
                            <span class="input-group-append">
                                <span class="input-group-text bg-white">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="card-body">
    <div class="table-responsive justify-content-between">

    </div>
</div>
@endsection
