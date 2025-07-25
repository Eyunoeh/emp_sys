<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller

{
    public function register(Request $request){
        $registerFields = $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('users', 'name')],
            'email' => ['required', 'string', 'max:255', Rule::unique('users', 'email')],
            'password' => 'required'
        ]);
        $registerFields['password'] = bcrypt($registerFields['password']);
        $user = User::create($registerFields);
        auth()->login($user);
        return redirect('/index');
    }
    public function login(Request $request){
        $loginFields = $request->validate([
            'user_name' => 'required',
            'password' => 'required'
        ]);
        return "user ay naka login";
    }
}
