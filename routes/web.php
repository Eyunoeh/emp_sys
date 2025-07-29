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
Route::get('/Employee/{type}', [EmployeeInfoController::class, 'getEmployees']);


Route::get('Forms/AddEmployee', function () {
    return view('pages.addmep');
});
//employee data
Route::get('/Employee/Table/{type}', [EmployeeInfoController::class, 'getEmployees']);


//EmployeeInfo post

Route::post('/employee/new-employee', [EmployeeInfoController::class, 'addEmployee']);




Route::get('/Users', function () {
    return view('pages.users');
});

Route::get('/EmployeeID', function () {
    return view('pages.empid');
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


