<?php

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\FaultController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('equipment', [EquipmentController::class, 'index'])->name('equipment.index');
Route::get('fault/{id}', [FaultController::class, 'show'])->name('faults.show');