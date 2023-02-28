<?php

use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomePageSettingController;
use App\Http\Controllers\Admin\MenuCategoryController;
use App\Http\Controllers\Admin\MenuController;
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
        Route::prefix('menu_categories')->name('menu_category.')->group(function (){
            Route::get('list',[MenuCategoryController::class,'list'])->name('list');
            Route::get('', [MenuCategoryController::class, 'index'])->name('index');
            Route::get('/create', [MenuCategoryController::class, 'create'])->name('create');
            Route::get('{menu_category}', [MenuCategoryController::class, 'show'])->whereNumber('menu_category')->name('show');
            Route::post('', [MenuCategoryController::class, 'store'])->name('store');
            Route::get('{menu_category}/edit', [MenuCategoryController::class, 'edit'])->whereNumber('menu_category')->name('edit');
            Route::patch('{menu_category}',[MenuCategoryController::class,'update'])->whereNumber('menu_category')->name('update');
            Route::delete('{menu_category}',[MenuCategoryController::class,'delete'])->whereNumber('menu_category')->name('delete');
        });
        Route::prefix('menus')->name('menu.')->group(function (){
            Route::get('', [MenuController::class, 'index'])->name('index');
            Route::get('/create', [MenuController::class, 'create'])->name('create');
            Route::get('{menu}', [MenuController::class, 'show'])->whereNumber('menu')->name('show');
            Route::post('', [MenuController::class, 'store'])->name('store');
            Route::get('{menu}/edit',[MenuController::class,'edit'])->whereNumber('menu')->name('edit');
            Route::patch('{menu}',[MenuController::class,'update'])->whereNumber('menu')->name('update');
            Route::delete('{menu}', [MenuController::class, 'delete'])->whereNumber('menu')->name('delete');
        });
        Route::prefix('home_page_settings')->name('home_page_setting.')->group(function () {
            Route::get('', [HomePageSettingController::class, 'edit'])->name('edit');
            Route::post('', [HomePageSettingController::class, 'update'])->name('update');
            Route::post('/upload', [HomePageSettingController::class, 'upload'])->name('upload');
            Route::delete('{homePageMedia}',[HomePageSettingController::class,'delete'])->name('delete');
        });
    });
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login');
});
