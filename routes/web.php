<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeadController;

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
    return view('starter');
})->name('starter');


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('registration', [AuthController::class, 'registration'])->name('registration');

Route::get('leads', [LeadController::class, 'index'])->name('index.leads');
Route::post('leads', [LeadController::class, 'store'])->name('store.leads');
//Route::patch('leads', [LeadController::class, 'update'])->name('update.leads');
Route::put('leads/update',[LeadController::class, 'update'])->name('update.leads');
