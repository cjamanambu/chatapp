@extends('layouts.error-layout')
@section('title', 'Internal Server Error')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h3>Internal Server Error</h3>
        <small class="text-muted">
            <a href="{{ route('home') }}">Go Home</a>
        </small>
    </div>
    <p>
        {{--        {{ $exception->getMessage() }}--}}
        Oops! Something went wrong.
    </p>
@endsection
