<?php


namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Emp_info;
use App\Models\Employment_info;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeeInfoController extends Controller
{
    public function addEmployee(Request $request){
        $employeeFields = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'birth_date' => ['required', 'date'],
            'gender' => ['required', 'string', 'max:255'],
            'marital_status' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'string', 'max:255', Rule::unique('emp_info', 'contact_number')],
            'address' => ['required', 'string', 'max:255'],
            'employment_status' => ['required', 'string', 'in:1,2,3'],
            'employeeID' => [ 'string', 'max:255', Rule::unique('employment_info', 'employeeID')],
            'dateHired' => ['required', 'date'],
            'regularization' => ['nullable','date'],
            'contract_end' => ['nullable','date'],
            'department_name' => ['required','string', 'max:255'],
            'position' => ['required','string', 'max:255'],
            'designation' => ['required','string', 'max:255'],
            'companyEmail' => ['nullable', 'string', 'max:255',Rule::unique('employment_info', 'companyEmail')],
            'alternativeEmail' => ['nullable','string', 'max:255',Rule::unique('employment_info', 'alternativeEmail')],
            'Rate' => ['numeric']
        ]);
        $emp = Emp_info::create($employeeFields);

        $employeeFields['employee_id'] = $emp->id;

        Employment_info::create($employeeFields);
        Department::create($employeeFields);

        return redirect('/Forms/AddEmployee');

    }
    public function getEmployees(Request $request, $type): array
    {
        $type_map = ['Regular' => 1,
            'Probationary' => 2,
            'Parttime' => 3,
            'Resigned' => 4
        ];
        if (!array_key_exists($type, $type_map)) {
            abort(400, 'Invalid employee type.');
        }

        $status = $type_map[$type];

        $employees = Emp_info::with(['employment', 'department'])
            ->whereHas('employment', function ($query) use ($status) {
                $query->where('employment_status', $status);
            })
            ->get();

        return [
            'data' => $employees,
            'type' => $type];
    }
    public function getEmployee(Request $request)
    {
        $employeeId = $request->get('employeeID');

        $employee = Emp_info::with(['employment', 'department'])
            ->whereHas('employment', function ($query) use ($employeeId) {
                $query->where('employeeID', $employeeId);
            })
            ->get()
            ->makeHidden(['emp_id', 'created_at', 'updated_at'])
            ->each(function ($emp) {
                $emp->employment->makeHidden(['created_at', 'updated_at', 'employment_info_id']);
                $emp->department->makeHidden(['created_at', 'updated_at', 'department_id']);
            });



        return ['employee' => $employee];
    }



}
