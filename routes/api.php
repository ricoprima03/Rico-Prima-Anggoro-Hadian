<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\QurbanController;

Route::get('/qurban', [QurbanController::class, 'index']);
Route::post('/qurban', [QurbanController::class, 'store']);
