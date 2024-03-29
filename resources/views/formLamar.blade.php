@extends('layouts.app')

@section('content')
<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2>Job Applicant Form</h2>
            @foreach($lowongan as $data)
            <p class="lead">{{$data->unit->nama}}</p>
        </div>

        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-center align-items-center mb-3">
                    <span class="text-primary ">Applied Job</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">{{$data->judul}}</h6>
                            <small class="text-muted">{{$data->deskripsi}}</small>
                        </div>
                    </li>

                </ul>

            </div>
            <div class="col-md-7 col-lg-8">
                <!-- <h4 class="mb-3">Billing address</h4> -->
                <form action="/applyjob" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <input type="text" hidden name="user_id" value="{{ Auth::user()->id }}">
                        <input type="text" hidden name="lowongan_id" value="{{$data->id}}">
                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" name="username"
                                    value=" {{ Auth::user()->name }}" placeholder="Username" required readonly>
                                <div class="invalid-feedback">
                                    Your username is required.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span
                                    class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}"
                                placeholder="you@example.com" readonly>
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        @foreach($syaratArray as $syarat)
                        @foreach($syarat as $item)
                        <div class="col-md-4">
                            <label for="state" class="form-label">{{$item}}</label>
                            <input type="file" name="{{$item == 'Transkrip Nilai' ? 'transkrip_nilai' : 'cv'}}" id="">
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                        <button type="submit" class="w-100 btn btn-primary btn-lg mt-4">Confirm</button>
                    </div>
                </form>
            </div>
    </main>
    @endforeach
</div>
@endsection
