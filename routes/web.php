<?php

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\FaultController;
use App\Http\Controllers\EquipmentImageController;
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

Route::get('/', [App\Http\Controllers\EquipmentController::class, 'index'])->name('home');
Route::get('equipment', [EquipmentController::class, 'index'])->name('equipment.index');
Route::get('equipment/show/{id}', [EquipmentController::class, 'show'])->name('equipment.show');
Route::get('equipment/delete/{id}', [EquipmentController::class, 'delete'])->name('equipment.delete');
Route::get('equipment/create/', [EquipmentController::class, 'create'])->name('equipment.create');
Route::post('equipment/store', [EquipmentController::class, 'store'])->name('equipment.store');

Route::post('equipment/updateimage/{id}', [EquipmentImageController::class, 'update'])->name('equipment.image.update');

Route::get('faults/{id}', [FaultController::class, 'show'])->name('faults.show');
Route::get('faults/create/{id}', [FaultController::class, 'create'])->name('faults.create');
Route::get('faults/delete/{id}', [FaultController::class, 'delete'])->name('faults.delete');
Route::post('faults/store', [FaultController::class, 'store'])->name('faults.store');