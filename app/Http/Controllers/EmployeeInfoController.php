<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeInfoController extends Controller
{
    public function addEmployee(Request $request){
        $employeeFields = $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'mname' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'date'],
            'gender' => ['required', 'string', 'max:255'],
            'marital_stat' => ['required', 'string', 'max:255'],
            'contactNum' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],

        ]);
    }
}
