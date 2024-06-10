<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Weapon;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        $weapons = Weapon::all();
        return view('user.pengajuan.index', compact('weapons'));
    }
}

