<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale()], function(){
Route::prefix('admin')
    ->name('admin.')
    -> middleware ('auth','is_admin','verified')
    ->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        // راوتات ادمن إضافية هنا لو حبيت

        Route::resource('categories',CategoryController::class);
    });
});
