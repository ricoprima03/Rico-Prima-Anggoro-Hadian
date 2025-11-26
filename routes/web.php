<?php

use Illuminate\Support\Facades\Route;

Route::view('/qurban', 'qurban')->name('qurban');
Route::get('/', function () {
    return view('layouts.home');
});
