@extends('layout')

@section('show-employee')
    <div class="emp-detail-header">
        <p>Employee Detail</p>
    </div>
    
    <table class="table table-light show-table">
        <tr class="table-light">
            <td class="table-light">Title</td>
            <td class="table-light">Value</td>
        </tr>
        <tr class="table-light">
            <td class="table-light">ID</td>
            <td class="table-light">{{ $employee->id }}</td>
        </tr>
        <tr class="table-light">
            <td class="table-light">Name</td>
            <td class="table-light">{{ $employee->name }}</td>
        </tr>
        <tr class="table-light">
            <td class="table-light">Gmail</td>
            <td class="table-light">{{ $employee->gmail }}</td>
        </tr>
        <tr class="table-light">
            <td class="table-light">Position</td>
            <td class="table-light">{{ $employee->position }}</td>
        </tr>
        <tr class="table-light">
            <td class="table-light">Join Date</td>
            <td class="table-light">{{ $employee->join_date }}</td>
        </tr>
        <tr class="table-light">
            <td class="table-light">Address</td>
            <td class="table-light">{{ $employee->address }}</td>
        </tr>
        <tr class="table-light">
            <td class="table-light">Phone Number</td>
            <td class="table-light">{{ $employee->phone_number }}</td>
        </tr>
        <tr class="table-light">
            <td class="table-light">Salary</td>
            <td class="table-light">{{ $employee->salary->salary }}</td>
        </tr>
    </table>
@endsection