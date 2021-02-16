@extends('layout')

@section('home')



@foreach ($employees as $employee)
    <div class="card mt-4" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $employee->name }}</h5>
            <p class="card-text">{{ $employee->address }}</p>
            <a href="/employee/{{{$employee->id}}}" class="btn btn-danger">Detail</a>
        </div>
    </div>
@endforeach
@endsection