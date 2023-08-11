@extends('layouts.auth-layout')
@section('title', 'Change Password')

@section('extra-styles')
    <link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h3>Change Password</h3>
        <small class="text-muted">
            <a href="{{ route('home') }}">Go Home</a>
        </small>
    </div>
    <form action="{{route('auth.post.change-password')}}" method="post" class="py-2">
        @csrf
        @honeypot
        <div class="mb-3">
            <label for="old-password" class="form-label">Old Password</label>
            <input type="password" class="form-control @error('old_password') error @enderror" id="old-password"
                   name="old_password">
            @error('old_password')
            <p class="form-error"> {{ $message }} </p>
            @enderror
        </div>
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
