<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\TransaccionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('welcome2');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/cuentas', [CuentaController::class, 'index'])->name('cuentas');
    Route::get('/cuentas/create', [CuentaController::class, 'create'])->name('cuentas.create');
    Route::post('/cuentas/create', [CuentaController::class, 'store'])->name('cuentas.store');
    Route::get('/cuentas/edit/{cuenta}', [CuentaController::class, 'edit'])->name('cuentas.edit');
    Route::put('/cuentas/update/{cuenta}', [CuentaController::class, 'update'])->name('cuentas.update');
    Route::delete('/cuentas/delete/{cuenta}', [CuentaController::class, 'destroy'])->name('cuentas.delete');
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});

