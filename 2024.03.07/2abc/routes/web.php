<?php

use App\Http\Controllers\SorozatController;
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
    return view('welcome');
});

Route::get('/hozzaad', [SorozatController::class, 'hozzaadView'])->name('hozzaad');
Route::post('/hozzaad', [SorozatController::class, 'hozzaadas'])->name('hozzaadas');

Route::get('/megjelenit', [SorozatController::class, 'megjelenitView'])->name('hozzaad');
