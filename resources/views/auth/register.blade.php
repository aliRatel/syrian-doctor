@extends('layouts.app')

@section('content')
<div class="container mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card login-card">
                <div class="card-header">
                    <img src="/images/doctor avatar.png" class="login-card-avatar">
                    <h1 style="color:black;">{{__('auth.Register')}}</h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group col">
                            <label for="name" class="row-md-4 col-form-label text-md-right"
                                style="color:black;">{{ __('auth.Name') }}</label>

                            <div class="row-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col">
                            <label for="email" class="row-md-4 col-form-label text-md-right"
                                style="color:black;">{{ __('auth.E-Mail Address') }}</label>

                            <div class="row-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col">
                            <label for="password" class="row-md-4 col-form-label text-md-right"
                                style="color:black;">{{ __('auth.Password') }}</label>

                            <div class="row-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col">
                            <label for="password-confirm" class="row-md-4 col-form-label text-md-right"
                                style="color:black;">{{ __('auth.Confirm Password') }}</label>

                            <div class="row-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group col mt-4">
                            <div class="row-md-6 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('auth.Register') }}
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
