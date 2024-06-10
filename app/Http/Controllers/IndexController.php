<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\Personil;
use App\Models\Weapon;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function indexStaffIT(Request $request)
    {
        $count_akun = Akun::all()->count();
        $count_personil = Personil::all()->count();
        $count_weapon = Weapon::all()->count();

        return view('staffit.home.index', compact('count_akun', 'count_personil', 'count_weapon'));
    }
}
