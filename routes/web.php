<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatchesController;


Route::get('/', function () {
    return view('welcome');
});


// Listing Batches
Route::get('/batches', [BatchesController::class, 'index'])->name('batches.index');

// Creating Batches
Route::get('/batches/create', [BatchesController::class, 'create'])->name('batches.create');
Route::post('/batches', [BatchesController::class, 'store'])->name('batches.store');

// Showing Batches
Route::get('/batches/{batch}', [BatchesController::class, 'show'])->name('batches.show');

// Editing Batches
Route::get('/batches/{batch}/edit', [BatchesController::class, 'edit'])->name('batches.edit');
Route::put('/batches/{batch}', [BatchesController::class, 'update'])->name('batches.update');

// Deleting Batches
Route::delete('/batches/{batch}', [BatchesController::class, 'destroy'])->name('batches.destroy');
