<?php

namespace Database\Seeders;

use App\Models\Akun;
use App\Models\Personil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ApproverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personilData = [
            'nrp' => '999222',
            'nama' => 'Staff Approver',
            'pangkat' => 'Sersan',
            'jabatan' => 'Komandan',
            'kesatuan' => 'Pasukan Khusus'
        ];

        // Data Akun
        $akunData = [
            'username' => 'approver',
            'email' => 'approver@yopmail.com',
            'password' => Hash::make('asdf1234'),
            'role' => 'approver',
        ];

        // Buat objek Personil baru dan simpan ke dalam database
        $personil = Personil::create($personilData);

        // Buat objek Akun baru dan hubungkan dengan Personil
        $akun = new Akun($akunData);
        $personil->akun()->save($akun);
    }
}
