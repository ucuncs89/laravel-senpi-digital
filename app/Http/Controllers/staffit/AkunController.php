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
            return redirect()->route('staff-it-akun.index')->with('success', 'Data berhasil disimpan.');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function edit($id)
    {
        $akun = Akun::with('personil')->find($id);
        return response()->json($akun);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nrp' => 'required',
            'nama' => 'required',
            'pangkat' => 'required',
            'jabatan' => 'required',
            'kesatuan' => 'required',
            'username' => 'required',
            'email' => 'required|email',
        ]);

        // Memulai transaksi
        try {
            DB::transaction(function () use ($request, $id) {
                // Update data Akun
                $akun = Akun::with('personil')->find($id);
                $akunData = [
                    'username' => $request->username,
                    'email' => $request->email,
                ];
                $akun->update($akunData);
                // Update data Personil setelah akun diperbarui
                $personilData = [
                    'nrp' => $request->nrp,
                    'nama' => $request->nama,
                    'pangkat' => $request->pangkat,
                    'jabatan' => $request->jabatan,
                    'kesatuan' => $request->kesatuan,
                ];

                $personil = Personil::findOrFail($akun->personil_id);
                $personil->update($personilData);
            });
            return redirect()->route('staff-it-akun.index')->with('success', 'Data berhasil diupdate.');
        } catch (\Throwable $th) {
            return redirect()->route('staff-it-akun.index')->with('error', 'Data gagal diupdate.');
        }
    }
    public function destroy($id)
    {
        // Cari data Personil berdasarkan ID
        $akun = Akun::find($id);

        if (!$akun) {
            return redirect()->route('staff-it-akun.index')->with('error', 'Data tidak ditemukan.');
        }

        // Hapus data Personil dan Akun terkait
        $akun->personil()->delete();
        $akun->delete();

        return redirect()->route('staff-it-akun.index')->with('success', 'Data berhasil dihapus.');
    }
}
