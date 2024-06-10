<?php

namespace App\Http\Controllers\staffit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadTestController extends Controller
{
    public function Index()
    {
        return view('staffit.upload-test.index');
    }

    public function showFormAdd()
    {
        return view('staffit.upload-test.add');
    }
}
