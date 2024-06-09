<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function indexStaffIT()
    {
        return view('staffit.home.index');
    }
}
