<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserService
{

    public function register(Request $request): User
    {
        $validated = $request->validate([
            'user_name' => ['required', 'string', 'max:255', Rule::unique('tbl_accounts', 'user_name')],
            'email' => ['required', 'string', 'max:255', Rule::unique('tbl_accounts', 'email')],
            'password' => 'required',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);
        auth()->login($user);

        return $user;
    }
    public function login(Request $request): ?User
    {
        $validatedFields = $request->validate([
            'user_name' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validatedFields)) {
            $request->session()->regenerate();
            return Auth::user(); // ✅ return the actual user
        }

        return null; // ✅ consistent with return type
    }

}
