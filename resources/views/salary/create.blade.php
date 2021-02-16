@extends('layout')

@section('create-salary')
    
<form method="POST" action="/salary/save">
    @csrf
    <div class="row mb-3 w-50" style="display:none">
        <label for="employee-id" class="col-sm-2 col-form-label">Employee Id</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="employee-id" value="{{ $employee->id }}">
        </div>
    </div>
    <div class="row mb-3 w-50">
      <label for="salary" class="col-sm-2 col-form-label">Salary</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="salary">
      </div>
    </div>
    <div class="row mb-3 w-50">
        <label for="salary" class="col-sm-2 col-form-label">Tax</label>
        <div class="col-sm-10">
          <input type="number" step="0.01" class="form-control" name="tax">
        </div>
    </div>
    <div class="row mb-3 w-50">
        <label for="ssb" class="col-sm-2 col-form-label">SSB</label>
        <div class="col-sm-10">
          <input type="number" step="0.01" class="form-control" name="ssb">
        </div>
    </div>
    <div class="row mb-3 w-50">
        <label for="unpaid-leave" class="col-sm-2 col-form-label">Upaid Leave</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="unpaid-leave">
        </div>
    </div>
    <div class="row mb-3 w-50">
        <label for="position" class="col-sm-2 col-form-label">Position</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="position">
        </div>
    </div>
    <div class="row mb-3 w-50">
        <label for="bonus" class="col-sm-2 col-form-label">Bonus</label>
        <div class="col-sm-10">
          <input type="number" step="0.01" class="form-control" name="bonus">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection