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
        <div class="mb-3">
            <label for="username" class="form-label">Email or Username</label>
            <input type="text" class="form-control" id="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="position-relative auth-pass-inputgroup mb-3">
                <input type="password" class="form-control pe-5" id="password">
                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                        type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
            </div>
        </div>
        <div>
            <div class="float-end">
                <a href="{{route('auth.get.forgot')}}" class="text-muted small">Forgot password?</a>
            </div>
            <div class="form-check form-check-info font-size-16">
                <input class="form-check-input" type="checkbox" id="remember-check">
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
                        <button type="button" class="btn btn-outline-dark w-100 google-btn">
                            <img src="{{asset('images/icons/icons8-google-96.png')}}" alt="google icon"
                                 class="google-icon">
                            Sign in with Google
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form><!-- end form -->
@endsection
