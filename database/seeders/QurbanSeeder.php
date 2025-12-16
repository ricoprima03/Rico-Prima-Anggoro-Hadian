<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Qurban;

class QurbanSeeder extends Seeder
{
    public function run(): void
    {
        Qurban::create([
            'nama' => 'Ahmad Fauzi',
            'email' => 'ahmad@gmail.com',
            'jenis_qurban' => 'Rendangmu Sapi',
            'jumlah_hewan' => 1,
            'alamat' => 'Jl. Malioboro, Yogyakarta',
            'status_pembayaran' => 'Lunas',
        ]);
    }
}
