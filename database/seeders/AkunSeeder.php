<?php

namespace Database\Seeders;

use App\Models\Akun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Akun::create([
            'username' => 'staffit',
            'email' => 'staffit@yopmail.com',
            'password' => Hash::make('asdf1234'),
            'personil_id' => 1,
            'role' => 'staff-it',
        ]);
        Akun::create([
            'username' => 'approver',
            'email' => 'approver@yopmail.com',
            'password' => Hash::make('asdf1234'),
            'personil_id' => 2,
            'role' => 'approver',
        ]);

        Akun::create([
            'username' => 'user',
            'email' => 'user@yopmail.com',
            'password' => Hash::make('asdf1234'),
            'personil_id' => 3,
            'role' => 'user',
        ]);
    }
}
