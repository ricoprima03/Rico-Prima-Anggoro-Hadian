
<?php
Route::get('/Pembayaran.php', function () {
    return view('Pembayaran');
});

use Illuminate\Support\Facades\Route;

Route::view('/qurban', 'layouts.qurban')->name('qurban');
Route::get('/', function () {
    return view('layouts.home');
});
