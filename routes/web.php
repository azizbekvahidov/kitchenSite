<?php

use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
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

Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function (){
        Route::get('', [DashboardController::class, 'index'])->name('index');

        Route::prefix('contacts')->name('contact.')->group(function (){
            Route::get('', [ContactController::class, 'edit'])->name('edit');
            Route::post('', [ContactController::class, 'update'])->name('update');
        });
        Route::prefix('branches')->name('branch.')->group(function (){
            Route::get('',[BranchController::class,'index'])->name('index');
            Route::get('/create',[BranchController::class,'create'])->name('create');
            Route::get('{branch}',[BranchController::class,'show'])->whereNumber('branch')->name('show');
            Route::post('',[BranchController::class,'store'])->name('store');
            Route::get('{branch}/edit',[BranchController::class,'edit'])->whereNumber('branch')->name('edit');
            Route::patch('{branch}',[BranchController::class,'update'])->whereNumber('branch')->name('update');
            Route::delete('{branch}',[BranchController::class,'delete'])->whereNumber('branch')->name('delete');
        });
    });
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login');
});
