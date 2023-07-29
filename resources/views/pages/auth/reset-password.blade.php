@extends('layouts.auth-layout')
@section('title', 'Reset Password')

@section('extra-styles')
    <link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h3>Reset Password</h3>
        <small class="text-muted">
            Otherwise, <a href="{{ route('auth.get.login') }}">Sign In</a>
        </small>
    </div>
    <p class="mb-5">
        Hi {{ $user->username }}, please enter and confirm your new password below.
    </p>
    <form action="{{route('auth.post.reset')}}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="mb-3">
            <label for="password" class="form-label">New Password</label>
            <input type="password" class="form-control @error('password') error @enderror" id="password"
                   name="password">
            @error('password')
            <p class="form-error"> {{ $message }} </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password-confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password-confirmation" name="password_confirmation">
        </div>

        <div class="text-center mt-4">
            <button class="btn btn-primary w-100" type="submit">Submit</button>
        </div>
    </form><!-- end form -->
@endsection
