@extends('layout')

@section('salaries')

    @if ($salaries->count()  > 0 )
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Employee</th>
            <th scope="col">Salary</th>
            <th scope="col">Tax</th>
            <th scope="col">SSB</th>
            <th scope="col">unpaid_leave</th>
            <th scope="col">Position</th>
            <th scope="col">Bonus</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($salaries as $key => $salary)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{$salary->employee->name}}</td>
                <td>{{ $salary->salary }}</td>
                <td>{{ $salary->tax }}</td>
                <td>{{ $salary->ssb }}</td>
                <td>{{ $salary->unpaid_leave }}</td>
                <td>{{ $salary->position }}</td>
                <td>{{ $salary->bonus }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif

@endsection