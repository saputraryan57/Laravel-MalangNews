<?php

use App\Http\Controllers\penulisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/penulis', [penulisController::class, 'index']);
Route::get('/penulis/tambah', [penulisController::class, 'create']);
Route::post('/penulis/store', [penulisController::class, 'store']);
Route::get('/penulis/edit/{id}', [penulisController::class, 'edit']);
Route::put('/penulis/update/{id}', [penulisController::class, 'update']);
Route::get('/penulis/hapus/{id}', [penulisController::class, 'hapus']);
Route::get('/penulis/destroy/{id}', [penulisController::class, 'destroy']);
