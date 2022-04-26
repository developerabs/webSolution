<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JobCategoryController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\AdminController;


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'IsAdmin']], function() {
   
    Route::get('/',[AdminController::class, 'index'])->name('admin.dashboard');
    //job category routes 
    Route::prefix('job-categories')->group(function(){
        Route::get('view',[JobCategoryController::class, 'index'])->name('jobCategory.view');
        Route::post('store',[JobCategoryController::class, 'store'])->name('jobCategory.store');
        Route::get('edit/{id}',[JobCategoryController::class, 'edit'])->name('jobCategory.edit');
        Route::post('update/{id}',[JobCategoryController::class, 'update'])->name('jobCategory.update');
        Route::get('delete/{id}',[JobCategoryController::class, 'delete'])->name('jobCategory.delete');
    });
    //jobs routes 
    Route::prefix('jobs')->group(function(){
        Route::get('view',[JobController::class, 'index'])->name('jobs.view');
        Route::get('add',[JobController::class, 'add'])->name('jobs.add');
        Route::post('store',[JobController::class, 'store'])->name('jobs.store');
        Route::get('edit/{id}',[JobController::class, 'edit'])->name('jobs.edit');
        Route::post('update/{id}',[JobController::class, 'update'])->name('jobs.update');
        Route::get('delete/{id}',[JobController::class, 'delete'])->name('jobs.delete');
        Route::get('status-ctanges',[JobController::class, 'statusCtanges'])->name('jobs.statusCtanges');
    });
});