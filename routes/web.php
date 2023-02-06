<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'home']);

Route::get('/show/{person}', [MainController::class, 'show'])->name('person.show');

Route::get('/delete/{person}', [MainController::class, 'delete'])->name('person.delete');

Route::get('/create', [MainController::class, 'create'])->name('person.create');
Route::post('/store', [MainController::class, 'store'])->name('person.store');