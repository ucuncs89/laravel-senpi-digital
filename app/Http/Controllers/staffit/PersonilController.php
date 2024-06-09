<?php

namespace App\Http\Controllers\staffit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonilController extends Controller
{
    public function Index(Request $request)
    {
        return view('staffit.personil.index');
    }
}
