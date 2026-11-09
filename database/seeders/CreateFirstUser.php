<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;                    // <-- Tambahkan baris ini
use Illuminate\Support\Facades\Hash;   // <-- Tambahkan baris ini

class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // <-- Tambahkan baris di bawah ini di dalam function run()
        User::create([
            'name' => 'Admin',
            'email' => 'gatot@pcr.ac.id',
            'password' => Hash::make('gatotkaca')
        ]);
    }
}