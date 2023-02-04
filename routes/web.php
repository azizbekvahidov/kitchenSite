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

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::prefix('contacts')->name('contact.')->group(function (){
    Route::get('', [\App\Http\Controllers\ContactController::class, 'create'])->name('create');
    Route::post('', [\App\Http\Controllers\ContactController::class, 'store'])->name('store');
});
