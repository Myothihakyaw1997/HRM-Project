<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;
use App\Models\Employee;

class SalaryController extends Controller
{
    //

    public function index(){
        $salaries = Salary::all();
        return view('salaries',['salaries' => $salaries]);

    }

    public function create() {
        $employee = Employee::latest('id')->first();
        return view('salary.create',['employee' => $employee]);
    }

    public function save() {
        $salary = new Salary();
        $salary->employee_id = request('employee-id');
        $salary->salary = request('salary');
        $salary->tax = request('tax');
        $salary->ssb = request('ssb');
        $salary->unpaid_leave = request('unpaid-leave');
        $salary->position = request('position');
        $salary->bonus = request('bonus');

        $salary->save();

        return redirect('/employees');
    }
    
}
