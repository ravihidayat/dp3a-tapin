@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mx-auto">

                <div class="card-body card-body-login">
                    <div class="text-center mb-3">
                        <h1 class="auth-header">{{ __('Login') }}</h1>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row text-center">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right" placeholder="{{ __('E-Mail Address') }}"></label> -->

                            <div class="col-md-10 mx-auto">
                                <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror  email-textfield" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right" placeholder="{{ __('Password') }}"></label> -->

                            <div class="col-md-10 mx-auto">
                                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror  password-textfield" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary mx-auto d-block auth-button">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif

                                <p>Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection