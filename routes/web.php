<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SistemaController;
use Illuminate\Support\Facades\Route;

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
    return view('admin.pages.index');
});

Route::get('/dashboard', function () {
    return view('admin.pages.sistemas.create');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // sistemas
    Route::get('/sistemas', [SistemaController::class, 'index'])->name('sistema.index');
    Route::get('/sistema/create/', [SistemaController::class, 'create'])->name('sistema.create');
    Route::post('/sistema/store/', [SistemaController::class, 'store'])->name('sistema.store');
    Route::get('/sistema/desenvolvimento/', [SistemaController::class, 'desenvolvimento'])->name('sistema.desenvolvimento');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
