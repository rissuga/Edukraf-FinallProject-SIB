<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebinarController;
use App\Http\Controllers\cobaController;
use App\Http\Controllers\adminController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::get('/admin/logout', [adminController::class, 'logout'])->name('admin.logout');



Route::prefix('webinar')->group(function () {
    Route::get('/view', [WebinarController::class, 'index'])->name('webinar.view');
    Route::get('/add', [WebinarController::class, 'WebinarAdd'])->name('webinar.add');
    Route::post('/store', [WebinarController::class, 'WebinarStore'])->name('webinar.store');   

});

// Route::prefix('coba')->group(function () {
//     Route::get('/view', [cobaController::class, 'index'])->name('coba.view');
//     Route::get('/add',   [cobaController::class, 'CobaAdd'])->name('coba.add');
//     Route::post('/store',[cobaController::class, 'CobaStore'])->name('coba.store');   

// });
