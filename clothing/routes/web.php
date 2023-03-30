<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\TypeController;
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

Route::get('/', [PartController::class, 'init']);
Route::get('/pesquisa/{id}', [PartController::class, 'search']);
Route::post('/subscribe', [EmailController::class, 'subscribe']);
Route::get('/contato', [PartController::class, 'contact']);
Route::post('/email', [EmailController::class, 'contact']);
Route::post('/procura', [PartController::class, 'researches']);
Route::get('/dashboard',[PartController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('dashboard/parts', PartController::class);
Route::resource('dashboard/types', TypeController::class);

require __DIR__.'/auth.php';
