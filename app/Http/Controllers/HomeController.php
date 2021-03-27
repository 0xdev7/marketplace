<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('frontend.index');
    }

    public function setting()
    {
        return view('frontend.setting');
    }

    public function store(Request $request)
    {
        switch ($request->type) {
            case "pgp":
                $user = User::findOrFail(Auth::id());
                $user->tfa_status = ($request->tfa_status == null ? 0 : 1);
                $user->pgp_pubkey = $request->pgp_pubkey;
                $user->save();
                return back()->with('message', 'Updated successfully!');
                break;
        }

        return back()->withErrors('Error! Please try again later!');
    }
}
