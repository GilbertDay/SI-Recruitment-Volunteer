@extends('layouts.appadmin')
@section('content')
@php
$syarat = explode(',', $lowongan->syarat);
@endphp
<form method="POST" action="/editlowongan/{{$lowongan->id}}">
    @csrf
    <input hidden type="text" name="user_id" value="{{ Auth::user()->id }}">
    <div class="mb-3">
        <label for="judulLowongan" class="form-label">Judul Lowongan</label>
        <input name="judul" type="judul" class="form-control" value="{{$lowongan->judul}}" id="inputJudulLowongan"
            aria-describedby="emailHelp">
    </div>

    <!--nama unit-->
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Unit</label>
        <select name="unit" class="form-control">
            @foreach ($unit as $item)
            <option value="{{$item['id']}}">{{$item['nama']}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jenis Lowongan</label>
        <select name="jenis" class="form-control">
            <option value="Part Time">Part-Time</option>
            <option value="Full Time">Full-Time</option>
        </select>
    </div>

    <div class="mb-3">
        <div class="row form-group">
            <label for="from" class="col-sm-1 col-form-label">Tanggal buka</label>
            <div class="col-sm-4">
                <div class="input-group date" id="datepickerbuka">
                    <input name="tanggal_buka" type="text" class="form-control" id="from"
                        value="{{$lowongan->tanggal_buka}}">
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
            <label for="to" class="col-sm-1 col-form-label">Tanggal tutup</label>
            <div class="col-sm-4">
                <div class="input-group date" id="datepickertutup">
                    <input name="tanggal_tutup" type="text" class="form-control" id="to"
                        value="{{$lowongan->tanggal_tutup}}">
                    <span class="input-group-append">
                        <span class="input-group-text bg-white">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!--Syarat-->
    <div class="mb-3">
        <label for="judulLowongan" class="form-label">Syarat</label>
        <div class="form-check">
            <input name="syarat[]" class="form-check-input" type="checkbox" value="Transkrip Nilai"
                {{ in_array('Transkrip Nilai', $syarat) ? 'checked' : '' }} id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Transkrip Nilai
            </label>
        </div>
        <div class="form-check">
            <input name="syarat[]" class="form-check-input" type="checkbox" value="CV"
                {{ in_array('CV', $syarat) ? 'checked' : '' }} id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                CV
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1"
            rows="3">{{$lowongan->deskripsi}}</textarea>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Status Lowongan</label>
        <select name="status" class="form-control">
            <option value="1">Aktif</option>
            <option value="0">Tidak Aktif</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
