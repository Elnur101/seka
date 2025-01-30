<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CategoryServiceController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Admin\CategoryController;
Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('category/{category}', [CategoryServiceController::class, 'showServices'])->name('category.service');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function (){
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/category', CategoryController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
