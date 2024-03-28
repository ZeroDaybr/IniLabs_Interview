<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('question4.index', compact('employees'));
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->update(['salary' => $request->input('salary')]);
        return redirect('/employees')->with('success', 'Salary updated successfully');
    }

}
