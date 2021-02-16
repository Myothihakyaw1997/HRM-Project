<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class PageController extends Controller
{
    public function show() {
        $employees = Employee::all()->take(5);
        return view('home',['employees' => $employees]);
    }
}
