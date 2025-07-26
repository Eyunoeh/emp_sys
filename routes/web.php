<?php

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

Route::get('/regular', function () {
    return view('pages.regular');
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

