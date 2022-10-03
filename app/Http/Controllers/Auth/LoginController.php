<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (!Auth::attempt($credentials)) {
            throw ValidationValidationException::withMessages([
                'email' => [
                    __('auth.failed')
                ]
            ]);
        }
        return $request->user();
    }

    public function logout()
    {
        return Auth::logout();
        // Auth::guard('web')->logout();

        // return response()->json(['message' => 'Logged out successfully']);
    }
}
