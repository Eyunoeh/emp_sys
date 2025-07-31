<?php

use App\Http\Controllers\EmployeeInfoController;
use App\Http\Controllers\UserController;
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
});
Route::get('/api/employees/{type}', [EmployeeInfoController::class, 'getEmployees']);



Route::get('Forms/AddEmployee', function () {
    return view('pages.addmep');
});
Route::get('Forms/EditEmployee', function () {
    return view('pages.editemp');
});
//employee data
Route::get('/Employee/Table/{type}', [EmployeeInfoController::class, 'getEmployees']);


//EmployeeInfo post

Route::post('/employee/new-employee', [EmployeeInfoController::class, 'addEmployee']);




Route::get('/Users', function () {
    return view('pages.users');
});






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


