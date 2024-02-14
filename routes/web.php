<?php

use App\Http\Controllers\ExportController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\LicencierController;
use App\Http\Controllers\ProfileController;
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
    return view('index');
})->name('index');

Route::get('/export', [ExportController::class, 'export'])->name('export');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('inscription', InscriptionController::class);
Route::resource('licencier', LicencierController::class);


Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/partners', function () {
    return view('partners');
})->name('partners');

require __DIR__.'/auth.php';
