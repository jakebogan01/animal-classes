<?php

use App\Http\Controllers\AnimalController;
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

Route::get('/', [AnimalController::class,'index'])->name('home');

Route::get('/emperor-tamarin-monkey', [AnimalController::class, 'monkey'])
    ->name('animal.monkey');

Route::get('/fennec-fox', [AnimalController::class, 'fox'])
    ->name('animal.fox');

Route::get('/bradypus-pygmaeus-sloth', [AnimalController::class, 'sloth'])
    ->name('animal.sloth');
