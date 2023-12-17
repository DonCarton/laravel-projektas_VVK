<?php

use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminConferenceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Auth;
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

app()->setLocale('lt');

Route::get('/', function (){ return view('home.index'); })->name('dashboard');
Route::get('/contact', function (){ return view('home.contact'); })->name('contact');
Route::resource('articles', ArticlesController::class)->only(['index', 'show']);



Route::prefix('admin')->name('admin.')->group(function(){

    Route::get('/', function (){return view('admin.index');});

    Route::prefix('users')->name('users.')->group(function (){
        Route::get('/', [AdminUserController::class, 'index'])->name('index');
        Route::get('{id}', [AdminUserController::class, 'show'])->name('show');
        Route::get('{id}/editUser', [AdminUserController::class, 'edit'])->name('edit');
        Route::put('{id}', [AdminUserController::class, 'update'])->name('update');
    });

    Route::prefix('conferences')->name('conferences.')->group(function (){
        Route::get('/', [AdminConferenceController::class, 'index'])->name('index');
        Route::get('{id}', [AdminConferenceController::class, 'show'])->name('show');
        Route::get('{id}/editConference', [AdminConferenceController::class, 'edit'])->name('edit');
        Route::get('/createConference', [AdminConferenceController::class, 'create'])->name('create');
        Route::post('{conferenceId}', [AdminConferenceController::class, 'store'])->name('store');
        Route::put('{id}', [AdminConferenceController::class, 'update'])->name('update');
        Route::delete('{id}', [AdminConferenceController::class, 'destroy'])->name('destroy');
    });

});

Route::prefix('employee')->name('employee.')->group(function() {

    Route::get('/', [EmployeeController::class, 'index'])->name('index');
    Route::get('/{id}', [EmployeeController::class, 'show'])->name('show');

});

Route::prefix('client')->name('client.')->group(function() {

    Route::get('/', [ClientController::class, 'index'])->name('index');
    Route::get('/registerForConference/{id}', [ClientController::class, 'registerForConference'])->name('register');
    Route::get('/{id}', [ClientController::class, 'show'])->name('show');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
