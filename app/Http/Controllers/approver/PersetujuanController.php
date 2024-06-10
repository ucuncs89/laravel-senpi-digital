<?php

namespace App\Http\Controllers\approver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersetujuanController extends Controller
{
    public function Index(Request $request)
    {
        return view('approver.persetujuan.index');
    }
}
