<?php

use App\Http\Controllers\Admin\DashboardController;
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


Route::prefix('dashboard')->name('dashboard.')->group(function (){
    Route::get('', [DashboardController::class, 'index'])->name('index');

    Route::prefix('contacts')->name('contact.')->group(function (){
        Route::get('', [\App\Http\Controllers\ContactController::class, 'edit'])->name('edit');
        Route::post('', [\App\Http\Controllers\ContactController::class, 'update'])->name('update');
    });
});

