@extends('layouts.auth-layout')
@section('title', 'Register')

@section('extra-styles')
    <link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h3>Create Account</h3>
        <small class="text-muted">
            <a href="{{ route('auth.get.login') }}">Sign In</a> instead?
        </small>
    </div>
    <form action="{{route('auth.post.register')}}" method="post" novalidate>
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{old('username')}}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="mb-4">
            <p class="mb-0 small text-muted">
                By creating an account, I agree to the
                <a href="{{ route('legal.get.terms') }}" class="text-primary">Terms</a>
                and
                <a href="{{ route('legal.get.privacy') }}" class="text-primary">Privacy Policy</a>
            </p>
        </div>

        <div class="mb-3">
            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Create Account</button>
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
                            Sign up with Google
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form><!-- end form -->
@endsection
