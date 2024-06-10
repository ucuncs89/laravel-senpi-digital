<?php

namespace App\Http\Controllers\staffit;

use App\Http\Controllers\Controller;
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
        return view('staffit.upload-test.add');
    }
}
