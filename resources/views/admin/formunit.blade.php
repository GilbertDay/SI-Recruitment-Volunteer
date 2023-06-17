@extends('layouts.appadmin')
@section('content')
<form method="POST" action="/addunit">
  @csrf
  <input hidden type="text" name="user_id" value="{{ Auth::user()->id }}">
    <div class="mb-3">
      <label for="namaUnit" class="form-label">Nama Unit</label>
      <input name="nama" type="text" class="form-control" id="inputNamaAdmin" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="emailUnit" class="form-label">Email</label>
      <input name="email" type="email" class="form-control" id="inputEmailAdmin" aria-describedby="emailHelp">
    </div>


    <div class="mb-3">
      <label for="telponUnit" class="form-label">Nomor Telepon</label>
      <input name="no_telp" type="notelp" class="form-control" id="inputTeleponAdmin" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Deskripsi Unit</label>
      <textarea name="deskripsi_unit" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input name="password" type="password" class="form-control" id="inputEmailAdmin" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
