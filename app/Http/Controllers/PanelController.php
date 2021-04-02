<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class PanelController extends Controller
{
    public function __construct()
    {
        $this->middleware(array('auth', 'tfa'));
    }

    public function index()
    {
        return view('frontend.userpanel');
    }

    public function buyerpanel()
    {
        return view('frontend.buyerpanel');
    }

    public function vendorpanel()
    {
        return view('frontend.vendorpanel');
    }

    public function moderatorpanel()
    {
        return view('frontend.moderatorpanel');
    }

    public function adminpanel()
    {
        return view('frontend.adminpanel');
    }
}
