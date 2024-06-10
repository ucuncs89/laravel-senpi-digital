<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.index');
    }
    public function login(Request $request)
    {

        $request->validate([
            'username_or_email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('password');
        $loginField = filter_var($request->username_or_email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $credentials[$loginField] = $request->username_or_email;

        if (Auth::attempt($credentials)) {
            return $this->redirectToBasedOnRole(Auth::user()->role);
        }

        throw ValidationException::withMessages([
            'username_or_email' => [trans('auth.failed')],
        ]);
    }
    protected function redirectToBasedOnRole($role)
    {
        switch ($role) {
            case 'staff-it':
                return redirect()->intended('/staff-it');
            case 'approver':
                return redirect()->intended('/approver');
            case 'user':
                return redirect()->intended('/user');
            default:
                return redirect('/');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }
}
