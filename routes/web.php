<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChampionshipController;
use App\Http\Controllers\Date_championshipController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/suporte', function () {
        return view('suporte');
    })->name('suporte');

    Route::resource('/championships', ChampionshipController::class)
        ->names('championship');

    Route::resource('/date_championships', Date_championshipController::class)
        ->names('date_championship');

});


require __DIR__.'/auth.php';
