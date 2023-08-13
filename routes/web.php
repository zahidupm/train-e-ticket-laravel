<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\StationController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
   Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
   Route::get('/trains', [TrainController::class, 'trains'])->name('trains');
   Route::get('/add-train', [TrainController::class, 'addTrain'])->name('add-train');
   Route::post('/save-train', [TrainController::class, 'saveTrain'])->name('save-train');
   Route::get('/edit-train/{id}', [TrainController::class, 'editTrain'])->name('edit-train');
   Route::post('/delete-bogi/{id}', [TrainController::class, 'deleteBogi'])->name('delete-bogi');

   Route::get('/list-stations', [StationController::class, 'listStation'])->name('list-stations');
   Route::get('/add-station', [StationController::class, 'addStation'])->name('add-station');
   Route::post('/save-station', [StationController::class, 'saveStation'])->name('save-station');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
