@extends('layouts.auth-layout')
@section('title', 'Forgot Password')

@section('extra-styles')
    <link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h3>Trouble Signing In?</h3>
        <small class="text-muted">
            Otherwise, <a href="{{ route('auth.get.login') }}">Sign In</a>
        </small>
    </div>
    <p class="mb-5">
        Don't worry, we've got your back! Just enter your email address and we'll send you a link with which you can
        reset your password.
    </p>
    <form action="{{route('auth.post.forgot')}}" method="post">
        @csrf
        <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') error @enderror" id="email" name="email"
                   value="{{old('email')}}">
            @error('email')
            <p class="form-error"> {{ $message }} </p>
            @enderror
        </div>

        <div class="text-center mt-4">
            <button class="btn btn-primary w-100" type="submit">Submit</button>
        </div>
    </form><!-- end form -->
@endsection
