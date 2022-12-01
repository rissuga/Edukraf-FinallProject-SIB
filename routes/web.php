<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\WebinarController;
use App\Http\Controllers\backend\AdminAccountController;
use App\Http\Controllers\backend\LogoutController;
use App\Http\Controllers\backend\AccountController;

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

Route::get('/admin/logout', [LogoutController::class, 'logout'])->name('admin.logout');


Route::prefix('users')->group(function () {
    Route::get('view/admin/', [AdminAccountController::class, 'adminView'])->name('admin.view');
    Route::get('add/admin/', [AdminAccountController::class, 'adminAdd'])->name('admin.add');
    Route::post('store/admin/', [AdminAccountController::class, 'adminStore'])->name('admin.store');
    Route::get('edit/{id}', [AdminAccountController::class, 'adminEdit'])->name('admin.edit');
    Route::post('update/{id}', [AdminAccountController::class, 'adminUpdate'])->name('admin.update');
    Route::get('delete/{id}', [AdminAccountController::class, 'adminDelete'])->name('admin.delete');
});

// Route::prefix('users')->group(function (){
//     Route::get('account/view/', [AccountController::class, 'index'])->name('account.view');
//     Route::get('account/add/', [AccountController::class, 'accountAdd'])->name('account.add');
//     Route::post('account/store/', [AccountController::class, 'accountStore'])->name('account.store');
//     Route::get('account/edit/{id}', [AccountController::class, 'accountEdit'])->name('account.edit');
//     Route::get('account/update', [AccountController::class, 'accountUpdate'])->name('account.update');
//     Route::get('account/delete', [AccountController::class, 'accountDelete'])->name('account.delete');

// });


Route::prefix('webinar')->group(function () {
    Route::get('/webinar/view', [WebinarController::class, 'index'])->name('webinar.view');
    Route::get('/webinar/add', [WebinarController::class, 'webinarAdd'])->name('webinar.add');
    Route::post('/webinar/store', [WebinarController::class, 'webinarStore'])->name('webinar.store');   
    Route::get('/webinar/edit/{id}', [WebinarController::class, 'webinarEdit'])->name('webinar.edit');
    Route::get('/webinar/update', [WebinarController::class, 'webinarUpdate'])->name('webinar.update');

});


