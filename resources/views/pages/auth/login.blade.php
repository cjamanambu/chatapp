@extends('layouts.auth-layout')

@section('title', 'Login')

@section('extra-styles')
    <link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h3>Sign In</h3>
        <small class="text-muted">
            <a href="{{route('auth.get.register')}}">Create Account</a> instead?
        </small>
    </div>
    <form action="{{route('auth.post.login')}}" method="post">
        @csrf
        @honeypot
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') error @enderror" id="email" name="email"
                   value="{{old('email')}}">
            @error('email')
            <p class="form-error"> {{ $message }} </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') error @enderror" id="password"
                   name="password">
            @error('password')
            <p class="form-error"> {{ $message }} </p>
            @enderror
        </div>
        <div>
            <div class="float-end">
                <a href="{{route('auth.get.forgot')}}" class="text-muted small">Forgot password?</a>
            </div>
            <div class="form-check form-check-info font-size-16">
                <input class="form-check-input" type="checkbox" id="remember-check" name="remember">
                <label class="form-check-label font-size-14" for="remember-check">
                    Remember me
                </label>
            </div>
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-primary w-100" type="submit">Sign In</button>
        </div>
        <div class="mt-4 text-center">
            <div class="signin-other-title">
                <h5 class="font-size-14 mb-4 title">or</h5>
            </div>
            <div class="row">
                <div class="col-12">
                    <div>
                        @include('partials.google-btn')
                    </div>
                </div>
            </div>
        </div>
    </form><!-- end form -->
@endsection
