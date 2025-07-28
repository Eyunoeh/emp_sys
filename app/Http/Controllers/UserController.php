<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller

{
    public function register(Request $request, UserService $registrationService)
    {
        $registrationService->register($request);
        return redirect('/');
    }
    public function login(Request $request, UserService $loginService){
        $user = $loginService->login($request);
        if ($user) {
            return redirect('/');
        }
        return redirect('/login');
    }
}
