<!doctype html>
<html lang="en">

<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('Template/css/style.css') }}">

</head>

<body class="img js-fullheight" style="background-image: url(Template/images/image.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h1 class="display-3 text-white">{{ __('Register') }}</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <!-- <h3 class="mb-4 text-center">Register Here</h3> -->
                        <form method="POST" action="{{route('register')}}">
                            @csrf
                            <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Nama" name="name" value="{{ old('name') }}" required
                                    autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Email" name="email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div>
                                    <input id="ku" type="radio" name="role" value="1">
                                    <label for="ku">Kepala Unit</label>
                                </div>

                                <div>
                                    <input id="user" type="radio" name="role" value="0">
                                    <label for="user">User</label>
                                </div>

                            </div>
                            <div class="form-group">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control"
                                    placeholder="Confirm Password" name="password_confirmation" required
                                    autocomplete="new-password">

                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">{{ __('Register')
                                    }}</button>
                            </div>
                            <div class="form-group d-md text-center">
                                <a href="{{ route('login') }}" class="mb-4 text-center">{{ __('Sign In') }}</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('Template') }}/jquery.min.js"></script>
    <script src="{{ asset('Template') }}/js/popper.js"></script>
    <script src="{{ asset('Template') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('Template') }}/js/main.js"></script>
</body>

</html>