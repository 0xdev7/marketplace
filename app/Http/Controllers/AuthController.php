<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Libraries\PGP2FA;

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
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->tfa_status == 1) {
                $this->set_tfaStatus(0);
                return redirect()->route('twofactor');
            }

            $this->set_tfaStatus(1);
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
        if (Auth::user() == null)
            return redirect()->route('login');

        $pgp = new PGP2FA();
        $pgp->generateSecret();
        $pgpmessage = $pgp->encryptSecret(Auth::user()->pgp_pubkey);

        return view('auth.twofactor', array('keyword' => $pgpmessage));
    }

    public function check_twofactor(Request $request)
    {
        $this->validate($request, [
            'keyword' => 'required',
        ]);

        $pgp = new PGP2FA();

        if ($pgp->compare($request->keyword)) {
            $this->set_tfaStatus(1);
            return redirect()->route('home');
        }

        return back()->withErrors([
            'message' => 'The keyword is incorrect, please try again.'
        ]);
    }

    public function set_tfaStatus($status)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->tfa_checked = $status;
        $user->save();
        return true;
    }
}
