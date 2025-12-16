<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Qurban;
use Illuminate\Http\Request;

class QurbanController extends Controller
{
    // GET: ambil semua data
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Qurban::all(),
            'message' => 'Data qurban berhasil diambil'
        ]);
    }

    // POST: simpan data
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'jenis_qurban' => 'required',
            'jumlah_hewan' => 'required|integer',
            'alamat' => 'required',
            'status_pembayaran' => 'required'
        ]);

        $qurban = Qurban::create($request->all());

        return response()->json([
            'success' => true,
            'data' => $qurban,
            'message' => 'Data qurban berhasil disimpan'
        ]);
    }
}
