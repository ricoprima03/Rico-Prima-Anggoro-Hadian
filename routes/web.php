<?php
use Illuminate\Support\Facades\Route;

Route::view('/qurban', 'layouts.qurban')->name('qurban');
Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/Pembayaran', function () {
    return view('layouts.Pembayaran');
});
