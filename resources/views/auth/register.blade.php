@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mx-auto">

                <div class="card-body card-body-register">
                    <div class="text-center mb-3">
                        <h1 class="auth-header">{{ __('Daftar') }}</h1>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row text-center">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> -->

                            <div class="col-md-10 mx-auto">
                                <input placeholder="Nama Lengkap" id="name" type="text" class="form-control @error('name') is-invalid @enderror auth-textfield" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <!-- <label for="telephone_number" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label> -->

                            <div class="col-md-10 mx-auto">
                                <input placeholder="Nomor Telepon" id="telephone_number" type="text" class="form-control @error('telephone_number') is-invalid @enderror auth-textfield" name="telephone_number" value="{{ old('telephone_number') }}" required autocomplete="telephone_number" autofocus>

                                @error('telephone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                            <div class="col-md-10 mx-auto">
                                <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror auth-textfield" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row text-center">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                            <div class="col-md-10 mx-auto">
                                <input placeholder="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror auth-textfield" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->

                            <div class="col-md-10 mx-auto">
                                <input placeholder="Konfirmasi Password" id="password-confirm" type="password" class="form-control auth-textfield" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary mx-auto d-block auth-button">
                                    {{ __('Register') }}
                                </button>

                                <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection