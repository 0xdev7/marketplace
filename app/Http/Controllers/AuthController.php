<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class AuthController extends Controller
{
    public function __construct()
    {
    }

    public function login()
    {
        return view('auth.login');
    }

    public function check_login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return back()->withErrors([
            'message' => 'The email or password is incorrect, please try again'
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->to('login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'question' => 'required',
            'answer' => 'required',
        ]);

        $user = User::create($request->only('name', 'email', 'password', 'question', 'answer'));

        Auth::login($user);

        return redirect()->route('home');
    }

    public function resetpwd()
    {
        return view('auth.resetpwd');
    }

    public function do_resetpwd()
    {
    }

    public function twofactor()
    {
        return view('auth.twofactor');
    }

    public function check_twofactor()
    {
    }
}
