<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller

{
    public function register(Request $request){
        $registerFields = $request->validate([
            'user_name' => ['required', 'string', 'max:255', Rule::unique('tbl_accounts', 'user_name')],
            'email' => ['required', 'string', 'max:255', Rule::unique('tbl_accounts', 'email')],
            'password' => 'required'
        ]);
        $registerFields['password'] = bcrypt($registerFields['password']);
        $user = User::create($registerFields);
        auth()->login($user);
        return redirect('/');
    }
    public function login(Request $request){
        $loginFields = $request->validate([
            'user_name' => 'required',
            'password' => 'required'
        ]);
        if (auth()->attempt(['user_name' => $loginFields['user_name'], 'password' => $loginFields['password']])) {

            $request->session()->regenerate();
            return redirect('/');
        }else{
            return redirect('/login');
        }


    }
}
