<?php

use App\Http\Controllers\EmployeeInfoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return view('pages.regular');
    }else{
        return view('index');
    }
});

Route::get('/Employee/Regular', function () {
    return view('pages.regular');
});
Route::get('/Employee/Probationary', function () {
    return view('pages.probation');
});
Route::get('/Employee/Parttime', function () {
    return view('pages.parttime');
});
Route::get('/Employee/Resigned', function () {
    return view('pages.resigned');
});
Route::get('/Users', function () {
    return view('pages.users');
});
Route::get('/EmployeeID', function () {
    return view('pages.empid');
});
Route::get('Employee/AddEmployee', function () {
    return view('pages.addmep');
});

Route::get('Employee/Table/{type}', [EmployeeInfoController::class, 'getEmployees']);



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

//EmployeeInfo
Route::post('/employee/new-employee', [EmployeeInfoController::class, 'addEmployee']);
