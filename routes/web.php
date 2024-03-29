<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
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

Route::controller(MainController::class)->group(function (){
    Route::get('/','Index')->name('Index');
    Route::get('/dashboard','Dashboard')->middleware(['auth', 'verified'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('admin')->group(function (){
    Route::controller(AdminController::class)->group(function (){
        Route::get('/admin','Index')->name('Admin');
        Route::get('/admin/settings','Settings')->name('Settings');
        Route::patch('/admin/settings','SettingsUpdate')->name('SettingsUpdate');
    });
});

require __DIR__.'/auth.php';
