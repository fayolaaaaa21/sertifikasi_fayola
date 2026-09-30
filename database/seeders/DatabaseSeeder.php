<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Skema;
use App\Models\Peserta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Account Admin
        User::create([
            'name' => 'fayola',
            'email' => 'admin@gmail.com', // <-- Ganti email admin di sini
            'password' => Hash::make('123'), // <-- Ganti password admin di sini
        ]);

        // Data Dummy Skema
        $skema1 = Skema::create([
            'kode_skema' => 'SKM-JWD-001',
            'nama_skema' => 'Junior Web Developer',
            'deskripsi' => 'Sertifikasi Okupasi Junior Web Developer'
        ]);

        $skema2 = Skema::create([
            'kode_skema' => 'SKM-DSA-002',
            'nama_skema' => 'Data Analyst',
            'deskripsi' => 'Sertifikasi Okupasi Data Analyst'
        ]);

        // Data Dummy Peserta
        Peserta::create([
            'skema_id' => $skema1->id,
            'nama_peserta' => 'Budi Santoso',
            'email' => 'budi@gmail.com',
            'no_hp' => '081234567890',
            'alamat' => 'Jakarta Pusat',
            'jenis_kelamin' => 'L'
        ]);
    }
}
