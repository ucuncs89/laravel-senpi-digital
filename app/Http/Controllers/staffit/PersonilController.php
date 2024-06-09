<?php

namespace App\Http\Controllers\staffit;

use App\Http\Controllers\Controller;
use App\Models\Personil;
use Illuminate\Http\Request;

class PersonilController extends Controller
{
    public function Index(Request $request)
    {
        $personil =  Personil::all();
        return view('staffit.personil.index', compact('personil'));
    }

    public function destroy($id)
    {
        // Cari data Personil berdasarkan ID
        $personil = Personil::find($id);

        if (!$personil) {
            return redirect()->route('staff-it-akun.index')->with('error', 'Data tidak ditemukan.');
        }

        // Hapus data Personil dan Akun terkait
        $personil->akun()->delete();
        $personil->delete();

        return redirect()->route('staff-it-akun.index')->with('success', 'Data berhasil dihapus.');
    }
}
