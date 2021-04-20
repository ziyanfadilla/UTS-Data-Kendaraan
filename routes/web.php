<?php

use App\Http\Controllers\KendaraanController;
use App\Kendaraan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function(){
    return view('profile');
})->name('profile');

// Route :: get('/kendaraan', [KendaraanController :: class,'index' ])->name('kendaraan.index');
// Route :: get ('/kendaraan/create', [KendaraanController :: class, 'create'])->name('kendaraan.create');
// Route :: post('/kendaraan/store', [KendaraanController :: class, 'store'])->name('kendaraan.store');
// Route :: put('/kendaraan/{id}', [KendaraanController :: class, 'update'])->name('kendaraan.update');
// Route :: delete('/kendaraan/{id}', [KendaraanController :: class, 'destroy'])->name('kendaraan.destroy');
// Route :: get('/kendaraan/{id}/edit', [KendaraanController :: class, 'edit'])->name('kendaraan.edit');

Route::resource('/kendaraan', 'KendaraanController');