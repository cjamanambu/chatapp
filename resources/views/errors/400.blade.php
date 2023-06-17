@extends('layouts.error-layout')
@section('title', 'Bad Request')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h3>Bad Request</h3>
        <small class="text-muted">
            <a href="{{ route('home') }}">Go Home</a>
        </small>
    </div>
    <p>
        {{ $exception->getMessage() }}
    </p>
@endsection
