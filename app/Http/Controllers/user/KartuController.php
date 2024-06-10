<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KartuController extends Controller
{
    public function Index()
    {
        return view('user.kartu.index');
    }

    public function detail()
    {
        return view('user.kartu.detail');
    }
}
