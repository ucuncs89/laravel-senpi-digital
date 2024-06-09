<?php

namespace App\Http\Controllers\staffit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function Index(Request $request)
    {
        return view('staffit.account.index');
    }
}
