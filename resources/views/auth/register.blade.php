<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
=======
@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-end">
        <div class="col-md-8" style="margin-top:20%">
            <div>

                <div class="card-body" style="background: linear-gradient(133.43deg, #000000 -3.1%, rgba(255, 255, 255, 0) 109.56%), linear-gradient(226.72deg, #000000 0%, rgba(255, 255, 255, 0) 101.89%), linear-gradient(41.6deg, #000000 -1.2%, rgba(255, 255, 255, 0) 97.69%), linear-gradient(311.25deg, #000000 0%, #000000 101.75%), #3D3737;
border-radius: 105px;">
>>>>>>> b099541cd037caef4e3ed61189babfedb83321d2
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
<<<<<<< HEAD
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
=======
                            <label for="name" class="col-md-4 col-form-label text-md-right text-light">{{ __('Name') }}</label>
>>>>>>> b099541cd037caef4e3ed61189babfedb83321d2

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
<<<<<<< HEAD
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
=======
                            <label for="email" class="col-md-4 col-form-label text-md-right text-light">{{ __('E-Mail Address') }}</label>
>>>>>>> b099541cd037caef4e3ed61189babfedb83321d2

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
<<<<<<< HEAD
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
=======
                            <label for="password" class="col-md-4 col-form-label text-md-right text-light">{{ __('Password') }}</label>
>>>>>>> b099541cd037caef4e3ed61189babfedb83321d2

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
<<<<<<< HEAD
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
=======
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right text-light">{{ __('Confirm Password') }}</label>
>>>>>>> b099541cd037caef4e3ed61189babfedb83321d2

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
<<<<<<< HEAD
                                <button type="submit" class="btn btn-primary">
=======
                                <button type="submit" class="btn btn-primary btn-light">
>>>>>>> b099541cd037caef4e3ed61189babfedb83321d2
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
