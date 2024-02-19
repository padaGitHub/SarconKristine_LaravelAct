<?php

use App\Http\Controllers\ConRouth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\verifyAgeMiddleware;
use App\Http\Middleware\RedirectIfAuthenticated;
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
    return view('checkverification');
});

Route::get('/login', [ConRouth::class, 'login'])->name(name: 'login');
Route::get('/dashboard', [ConRouth::class, 'dashboard'])->name(name: 'dashboard')->middleware('guest');
Route::get('/register', [ConRouth::class, 'register'])->name(name: 'register');
Route::get('/welcome', [ConRouth::class, 'welcome'])->name(name: 'welcome')->middleware('age');
Route::get('/checkverfication', [ConRouth::class, 'checkverfication'])->name(name: 'checkverfication');
Route::post('/register', [ConRouth::class, 'saveData'])->name(name: 'saveData');



