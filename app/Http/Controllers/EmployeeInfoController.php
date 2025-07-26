<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            'emp_stat' => ['required', 'string', 'in:1,2,3'],
            'employee_id' => [ 'string', 'max:255', Rule::unique('employment_info', 'employeeID')],
            'date_hired' => ['required', 'date'],
            'regularization' => [ 'date'],
            'end_contract' => [ 'date'],
            'department' => [ 'string', 'max:255'],
            'position' => ['required','string', 'max:255'],
            'designation' => ['required','string', 'max:255'],
            'comp_email' => [ 'string', 'max:255',Rule::unique('employment_info', 'companyEmail')],
            'alternate_email' => ['string', 'max:255',Rule::unique('employment_info', 'alternativeEmail')],
            'rate' => ['numeric', 'string', 'max:255'],
        ]);
    }
}
