<?php

namespace App\Http\Controllers\staffit;

use App\Http\Controllers\Controller;
use App\Models\Personil;
use App\Models\Tes;
use Illuminate\Http\Request;

class UploadTestController extends Controller
{
    public function Index()
    {
        $tes = Tes::all();
        return view('staffit.upload-test.index', compact('tes'));
    }

    public function showFormAdd()
    {
        $personil = Personil::all();
        return view('staffit.upload-test.add', compact('personil'));
    }
    public function store(Request $request)
    {
    }
}
