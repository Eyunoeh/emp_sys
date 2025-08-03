<?php

use App\Http\Controllers\EmployeeInfoController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\checkUser;
use App\Http\Middleware\HRSupervisorUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/Employee/Regular');
    }else{
        return view('index');
    }
});

//employee pages
Route::get('/Employee/{type}', function ($type) {
    return view('pages.employee_table', ['type' => $type]);
})->middleware('check.user');

Route::get('Forms/AddEmployee', function () {
    return view('pages.addmep');
})->middleware('check.user');
Route::get('Forms/EditEmployee', function () {
    return view('pages.editemp');
})->middleware('check.user');
//employee data
Route::get('/Employee/Table/{type}', [EmployeeInfoController::class, 'getEmployees'])->middleware('check.user');


//EmployeeInfo post

Route::post('/employee/new-employee', [EmployeeInfoController::class, 'addEmployee'])->middleware('check.user');


Route::get('/Users', function () {
    return view('pages.users');
})->middleware('check.user');

//api
Route::get('/api/employees/{type}', [EmployeeInfoController::class, 'getEmployees'])->middleware('check.user');
Route::get('api/employee',[EmployeeInfoController::class, 'getEmployee'])->middleware('check.user');



Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
});
Route::get('/register', function () {
    return view('register');
});


Route::post('/userlogin', [UserController::class, 'login']);
Route::post('/userregister', [UserController::class, 'register']);


//update
Route::put('/employee/update-employee' , [EmployeeInfoController::class, 'updateEmployee'])->middleware('check.user');
