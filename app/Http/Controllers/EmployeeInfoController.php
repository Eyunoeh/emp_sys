<?php


namespace App\Http\Controllers;

use App\Models\Emp_info;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeeInfoController extends Controller
{
    public function addEmployee(Request $request){
        $employeeFields = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'birth_date' => ['required', 'date'],
            'gender' => ['required', 'string', 'max:255'],
            'marital_status' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'string', 'max:255'],
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
        Emp_info::created($employeeFields);
    }
}
