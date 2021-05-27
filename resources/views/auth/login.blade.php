<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Panel Admin - Voting SB GKPS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.part.css')
</head>

<body class="darklayout">

    <!-- Bagian Login-->
    <div class="login-form-area mg-t-30 mg-b-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4"></div>
                <form id="adminpro-form" class="adminpro-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="col-lg-4">
                        <div class="login-bg">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="logo">
                                        <a href="#"><img src="{{asset('tmplt/img/logo/logo_dari_mintos.png')}}" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-title">
                                        <h1>Formulir Login</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Email</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input id="email" placeholder="" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Kata Sandi</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input id="password" placeholder="" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-keep-me">
                                                <label class="checkbox">
                                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Biarkan saya tetap masuk') }}
                                                    <i></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">

                                </div>
                                <div class="col-lg-8">
                                    <div class="login-button-pro">
                                        <button type="submit" class="login-button login-button-lg">
                                            {{ __('Masuk') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>
    <!-- Bagian Login-->

    <!-- Footer-->
    @include('layouts.part.footer')
    <!-- Footer-->

    @include('layouts.part.js')
</body>

</html>

