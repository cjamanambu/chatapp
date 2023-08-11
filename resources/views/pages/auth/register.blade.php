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
        @honeypot
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') error @enderror" id="email" name="email"
                   value="{{old('email')}}" required>
            @error('email')
            <p class="form-error"> {{ $message }} </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control @error('username') error @enderror" id="username" name="username"
                   value="{{old('username')}}" required>
            @error('username')
            <p class="form-error"> {{ $message }} </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') error @enderror" id="password" name="password"
                   required>
            @error('password')
            <p class="form-error"> {{ $message }} </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password-confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password-confirmation" name="password_confirmation"
                   required>
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
                        @include('partials.google-btn')
                    </div>
                </div>
            </div>
        </div>
    </form><!-- end form -->
@endsection
