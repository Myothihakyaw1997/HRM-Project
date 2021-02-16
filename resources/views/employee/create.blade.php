@extends('layout')

@section('create-employee')

<form method="POST" action="/employee/save">
    @csrf
    <div class="row mb-3 w-50">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name">
        </div>
    </div>
    <div class="row mb-3 w-50">
      <label for="gmail" class="col-sm-2 col-form-label">Gmail</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="gmail">
      </div>
    </div>
    <div class="row mb-3 w-50">
        <label for="join-date" class="col-sm-2 col-form-label">Join Date</label>
        <div class="col-sm-10">
            <input type="join-date" name="join-date" id="dateofbirth">
        </div>
    </div>
   
    <div class="row mb-3 w-50">
        <label for="position" class="col-sm-2 col-form-label">Position</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="position">
        </div>
    </div>
    <div class="row mb-3 w-50">
        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="address">
        </div>
    </div>
    <div class="row mb-3 w-50">
        <label for="phone-number" class="col-sm-2 col-form-label">Phone Number</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="phone-number">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection