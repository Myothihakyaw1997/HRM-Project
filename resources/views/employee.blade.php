@extends('layout')

@section('employee')
    <div class="emp-wrapper">
        <h2 class="mb-4">Employee List</h2>
        <a href="/employee/create"><div class="btn btn-danger">Add Employee</div></a>
    </div>
    
   <table class="table">
       <thead>
       <tr>
        <th class="col ">Name</th>
        <th class="col ">Position</th>
        <th class="col ">Join Date</th>
        <th class="col ">Salaries</th>
        <th class="col ">edit</th>
        <th class="col ">Detail</th>
        <th class="col ">Delete</th>
       </tr>
       </thead>
  <tbody>
    @foreach ($employees as $employee)
    <tr>
        <td> {{ $employee->name }}</td>
        <td> {{ $employee->position }}</td>
        <td> {{ $employee->join_date }}</td>
        <td> {{ $employee->salary->salary }}</td>
        <td> <a href="/employee/{{ $employee->id }}/edit"><button class="btn btn-primary">Edit</button></a></td>
        <td> <a href="/employee/{{ $employee->id }}/show"><button class="btn btn-primary">Detail</button></a></td>
        <td> <a href="/employee/{{ $employee->id }}/delete"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
    @endforeach
    </tbody>
   </table>
   
@endsection