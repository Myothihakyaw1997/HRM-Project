@extends('layout')

@section('emp-not-found')
    <div class="emp-error-card shadow">
        <div class="text-danger emp-error-msg m-3">404 !!</div>
        <div class="text-dark fs-4 m-3">The name <span class="text-danger">{{ $name }}</span> not found !!</div>
        <a href="/home"><div class="btn btn-dark m-3">Back</div></a>
    </div>
@endsection