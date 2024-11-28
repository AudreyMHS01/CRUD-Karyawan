<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/', [KaryawanController::class, 'index'])->name('index');
Route::get('/dashboard', [KaryawanController::class, 'dash'])->name('dashboard');
Route::get('/tambah', [KaryawanController::class, 'tambah'])->name('karyawan.tambah');
Route::post('/add', [KaryawanController::class, 'add'])->name('karyawan.add');
Route::delete('/delete/{id}', [KaryawanController::class, 'delete'])->name('karyawan.delete');
Route::get('/edit/{id}', [KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::post('/update/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');