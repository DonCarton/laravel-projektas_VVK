<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

//Route::get('/', function () { return view('welcome'); });

Route::get('/', function (){ return view('home.index'); })->name('dashboard');
Route::get('/contact', function (){ return view('home.contact'); })->name('contact');
Route::resource('articles', ArticlesController::class)->only(['index', 'show']);
