<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
=======
@extends('layout') @section('content')
<div class="container">
    <div class="row justify-content-end">
        <div class="col-md-8" style="margin-top:20%">
            <div>

                <div class="card-body" style="background: linear-gradient(133.43deg, #000000 -3.1%, rgba(255, 255, 255, 0) 109.56%), linear-gradient(226.72deg, #000000 0%, rgba(255, 255, 255, 0) 101.89%), linear-gradient(41.6deg, #000000 -1.2%, rgba(255, 255, 255, 0) 97.69%), linear-gradient(311.25deg, #000000 0%, #000000 101.75%), #3D3737;
border-radius: 105px;">
>>>>>>> b099541cd037caef4e3ed61189babfedb83321d2
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
<<<<<<< HEAD
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
=======
                            <label for="email" class="col-sm-4 col-form-label text-md-right text-light">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus> @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right text-light">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required> @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
>>>>>>> b099541cd037caef4e3ed61189babfedb83321d2
                            </div>
                        </div>

                        <div class="form-group row">
<<<<<<< HEAD
                            <div class="col-md-6 offset-md-4">
=======
                            <div class="col-md-6 offset-md-4 text-light">
>>>>>>> b099541cd037caef4e3ed61189babfedb83321d2
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
<<<<<<< HEAD
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
=======
                                <button type="submit" class="btn btn-light">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-light" href="{{ route('password.request') }}">
>>>>>>> b099541cd037caef4e3ed61189babfedb83321d2
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
