<?php

namespace App\Http\Controllers\staffit;

use App\Http\Controllers\Controller;
use App\Models\Akun;
use App\Models\Personil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    public function Index(Request $request)
    {
        $akun = Akun::with('personil')->get();
        return view('staffit.account.index', compact('akun'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'nrp' => 'required|unique:personil',
            'nama' => 'required',
            'pangkat' => 'required',
            'kesatuan' => 'required',
            'username' => 'required|unique:akun',
            'email' => 'required|unique:akun|email',
            'password' => 'required|min:6',
        ]);
        // Memulai transaksi
        try {
            DB::transaction(function () use ($request) {
                $personilData = [
                    'nrp' => $request->nrp,
                    'nama' => $request->nama,
                    'pangkat' => $request->pangkat,
                    'jabatan' => $request->jabatan,
                    'kesatuan' => $request->kesatuan,
                ];
                $akunData = [
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'email' => $request->email,
                    'role' => 'user',
                ];

                $personil = Personil::create($personilData);

                // Buat objek Akun baru dan hubungkan dengan Personil
                $akun = new Akun($akunData);
                $personil->akun()->save($akun);
            });
            return redirect()->route('staff-it-akun')->with('success', 'Data berhasil disimpan.');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function destroy($id)
    {
        // Cari data Personil berdasarkan ID
        $akun = Akun::find($id);

        if (!$akun) {
            return redirect()->route('staff-it-akun')->with('error', 'Data tidak ditemukan.');
        }

        // Hapus data Personil dan Akun terkait
        $akun->personil()->delete();
        $akun->delete();

        return redirect()->route('staff-it-akun')->with('success', 'Data berhasil dihapus.');
    }
}
