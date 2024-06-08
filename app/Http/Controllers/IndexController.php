<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function auth()
    {
        return view('auth.index');
    }

    // Admin Controller
    public function admin()
    {
        return view('dashboard.admin.index');
    }

    public function account()
    {
        return view('dashboard.admin.account');
    }

    public function personil()
    {
        return view('dashboard.admin.personil');
    }

    public function weapon()
    {
        return view('dashboard.admin.weapon');
    }
}
