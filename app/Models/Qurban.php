<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qurban extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'jenis_qurban',
        'jumlah_hewan',
        'alamat',
        'status_pembayaran',
    ];
}
