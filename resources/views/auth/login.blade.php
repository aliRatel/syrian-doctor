@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card login-card">
                <div class="card-header">
                    <img src="/images/doctor avatar.png" class="login-card-avatar">
                    <h1 style="color:black;">{{__('auth.Login')}}</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group col">
                            <label for="email" style="color:black;"
                                class="row-md-6 col-form-label text-md-right ">{{ __('auth.E-Mail Address') }}</label>

                            <div class="row-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col">
                            <label for="password" style="color:black;"
                                class="row-md-6 col-form-label text-md-right">{{ __('auth.Password') }}</label>

                            <div class="row-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col">
                            <div class="">
                                <div class="form-check row ">
                                    <input class=" col-md-2 form-check-input" type="checkbox" name="remember"
                                        id="remember" {{ old('remember') ? 'checked' : '' }}>
<span class="col-md-2"></span>
                                    <label style="color:black;" class="col-md-8  form-check-label" for="remember">
                                        {{ __('auth.Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col mb-2">
                            <div class=" row-md-8 align-items-center ">
                                <button type="submit" class="btn btn-primary col-md-16">
                                    {{ __('auth.Login') }}
                                </button>


                            </div>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link  mt-4" href="{{ route('password.request') }}">
                                {{ __('auth.Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
            @endsection
