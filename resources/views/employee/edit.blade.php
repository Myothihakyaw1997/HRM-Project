@extends('layout')

@section('edit-employee')

<form method="POST" action="/employee/{{ $employee->id }}/update">
    @csrf
    @method('put')
    <div class="row mb-3 w-50">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" value="{{ $employee->name }}">
        </div>
    </div>
    <div class="row mb-3 w-50">
      <label for="gmail" class="col-sm-2 col-form-label">Gmail</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="gmail" value="{{ $employee->gmail }}">
      </div>
    </div>
    <div class="row mb-3 w-50">
        <label for="join-date" class="col-sm-2 col-form-label">Join Date</label>
        <div class="col-sm-10">
            <input type="join-date" name="join-date" id="dateofbirth" value="{{ $employee->join_date }}">
        </div>
    </div>
   
    <div class="row mb-3 w-50">
        <label for="position" class="col-sm-2 col-form-label">Position</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="position" value="{{ $employee->position }}">
        </div>
    </div>
    <div class="row mb-3 w-50">
        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="address" value="{{ $employee->address }}">
        </div>
    </div>
    <div class="row mb-3 w-50">
        <label for="phone-number" class="col-sm-2 col-form-label">Phone Number</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="phone-number" value="{{ $employee->phone_number }}">
        </div>
    </div>
    <div class="row mb-3 w-50">
        <label for="salary" class="col-sm-2 col-form-label">Salary</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="salary" value="{{ $employee->salary->salary }}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <div class="edit-back-btn">
    <a href="/employees">
      <button type="button" class="btn btn-dark">Back</button>
    </a>
  </div>

@endsection