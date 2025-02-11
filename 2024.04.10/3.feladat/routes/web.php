<?php

use App\Http\Controllers\FesztivalController;
use App\Models\Fesztival;
use Illuminate\Support\Facades\DB; 
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

Route::get('/fesztivalhozzaad', [FesztivalController::class, "hozzaadView"]);
Route::get('/fesztivalkiir', [FesztivalController::class, "kiirView"]);
Route::post('/feltolt', [FesztivalController::class, "feltolt"])->name('feltolt');
Route::get('/fesztivaltorol/{id}', function($id){
    DB::table('fesztival')->where('id', $id)->delete();
    return back();});
