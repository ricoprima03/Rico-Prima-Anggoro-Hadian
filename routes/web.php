<?php
use Illuminate\Support\Facades\Route;

Route::view('/qurban', 'layouts.qurban')->name('qurban');
Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/Pembayaran', function () {
    return view('layouts.Pembayaran');
});

Route::get('/tunaikansekarangkambing', function () {
    return view('layouts.tunaikansekarangkambing');
});

Route::get('/tunaikanSekarangSapi', function () {
    return view('layouts.tunaikanSekarangSapi');
});

Route::get('/struktur-organisasi', function () {
    return view('layouts.StrukturOrganisasi');
});

Route::get('/pembayaranqurban', function () {
    return view('layouts.pembayaranqurban');
});

Route::get('/invoice', function () {
    return view('layouts.invoice');
});
