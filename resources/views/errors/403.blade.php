@extends('layouts.error-layout')
@section('title', 'Forbidden')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h3>Forbidden</h3>
        <small class="text-muted">
            <a href="{{ route('home') }}">Go Home</a>
        </small>
    </div>
    <p>
        {{ $exception->getMessage() }}
    </p>
@endsection
