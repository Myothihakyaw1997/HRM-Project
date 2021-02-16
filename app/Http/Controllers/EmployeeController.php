<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('employee',['employees' => $employees]);
    }

    public function show($id){
        $employee = Employee::find($id);
        return view('employee.show',['employee' => $employee]);
    }

    public function search() {
        $name = strtolower(str_replace(' ','',request('emp-name')));

        $employee = Employee::whereRaw("LOWER(Replace(`name` , ' ', ''))= ?", [$name] )->first();
        if ($employee != null) {

            return view('employee.show',['employee' =>$employee]);
        }
        else {
            abort(404, "Request Employee Not Found !!!");
        }
    }
    public function create(){

        return view('employee.create');
    }

    public function delete($id){
        
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect('/employees');

    }

    public function save(){

        // request()->validate(
        //     [
        //         'name' => 'required',
        //         'join_date' => 'required',
        //         'position' => 'required',
        //         'gmail' => 'required',
        //         'address' => 'required',
        //         'phone_number' => 'required'
        //     ]
        //     );

        $employee = new Employee();
        $employee->name = request('name');
        $employee->join_date = request('join-date');
        $employee->position = request('position');
        $employee->gmail = request('gmail');
        $employee->address = request('address');
        $employee->phone_number = request('phone-number');

        $employee->save();

        return redirect('/salary/create');
        // return redirect()->action([SalaryController::class , 'create'],['employee' => 8]);
    }


    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit',['employee' => $employee]);       
    }

    public function update($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->name = request('name');
        $employee->join_date = request('join-date');
        $employee->position = request('position');
        $employee->gmail = request('gmail');
        $employee->address = request('address');
        $employee->phone_number = request('phone-number');
        $employee->salary->salary = request('salary');
        $employee->push();
        // $employee->save();
        
        return redirect('/employees');
    }
}
