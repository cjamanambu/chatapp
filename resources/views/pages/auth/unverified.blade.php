@extends('layouts.auth-layout')
@section('title', 'Email Unverified')

@section('extra-styles')
    <link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h3>Email Unverified</h3>
        <small class="text-muted">
            <a href="{{ route('auth.get.login') }}">Logout</a>
        </small>
    </div>
    <p>
        You need to verify your email address before you can access your account. Please check your inbox (including
        spam) for a verification link.
    </p>
    <p class="mb-5">
        If you didn't receive a message, please resend the verification link below.
    </p>
    <div class="text-center">
        <a class="btn btn-primary w-100" href="{{route('auth.get.resend-verification')}}">Resend Verification Link</a>
    </div>
    <form>
    </form><!-- end form -->
@endsection
