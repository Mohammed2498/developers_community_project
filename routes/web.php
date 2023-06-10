<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('layouts.admin-layout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->name('admin.')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::group([
    'prefix' => 'dashboard',
    'as' => 'admin.'
], function () {
    Route::resource('/users', \App\Http\Controllers\Admin\UserController::class);
    Route::put('/users/{user}/update-status', [\App\Http\Controllers\Admin\UserController::class,'updateStatus'])->name('users.updateStatus');
});

Route::get('/users/{id}/qrcode', [\App\Http\Controllers\Admin\UserController::class,'generateQrCode'])->name('users.qrcode');

require __DIR__ . '/auth.php';
