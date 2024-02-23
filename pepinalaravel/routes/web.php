<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssocierController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AssocierController::class,'index'])->name('index');

Route::get('/assosier-creer', [AssocierController::class,'create'])->name('create');

Route::post('/assosier-creer-2', [AssocierController::class,'store'])->name('store');

Route::get('/assosier-show', [AssocierController::class,'show'])->name('show');

Route::post('/assosier-detruite', [AssocierController::class,'destroy'])->name('destroy');

Route::get('/admin-login', [AssocierController::class,'admin'])->name('admin');

Route::post('/admin-login', [AssocierController::class,'adminConnect'])->name('admin.connect');
