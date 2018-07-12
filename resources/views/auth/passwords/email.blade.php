@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-end">
        <div class="col-md-8" style="margin-top:20%;">
            <div>

                <div class="card-body" style="background: linear-gradient(133.43deg, #000000 -3.1%, rgba(255, 255, 255, 0) 109.56%), linear-gradient(226.72deg, #000000 0%, rgba(255, 255, 255, 0) 101.89%), linear-gradient(41.6deg, #000000 -1.2%, rgba(255, 255, 255, 0) 97.69%), linear-gradient(311.25deg, #000000 0%, #000000 101.75%), #3D3737;
border-radius: 105px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-light">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-light">
                                    {{ __('Send Password Reset Link') }}
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
