<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\WebinarController;
use App\Http\Controllers\backend\AdminAccountController;
use App\Http\Controllers\backend\logoutController;
use App\Http\Controllers\backend\CategoryController;

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

Route::get('/admin/logout', [logoutController::class, 'logout'])->name('admin.logout');


Route::prefix('users')->group(function () {
    Route::get('view/admin/', [AdminAccountController::class, 'adminView'])->name('admin.view');
    Route::get('add/admin/', [AdminAccountController::class, 'adminAdd'])->name('admin.add');
    Route::post('store/admin/', [AdminAccountController::class, 'adminStore'])->name('admin.store');
    Route::get('edit/{id}', [AdminAccountController::class, 'adminEdit'])->name('admin.edit');
    Route::post('update/{id}', [AdminAccountController::class, 'adminUpdate'])->name('admin.update');
    Route::get('delete/{id}', [AdminAccountController::class, 'adminDelete'])->name('admin.delete');
});


Route::prefix('webinar')->group(function () {
    Route::get('/webinar/view', [WebinarController::class, 'index'])->name('webinar.view');
    Route::get('/add', [WebinarController::class, 'WebinarAdd'])->name('webinar.add');
    Route::post('/store', [WebinarController::class, 'WebinarStore'])->name('webinar.store');   
    Route::get('/webinar/edit/{id}', [WebinarController::class, 'WebinarEdit'])->name('webinar.edit');
    Route::get('/webinar/update', [WebinarController::class, 'WebinarUpdate'])->name('webinar.update');
    Route::get('/webinar/delete/{id}', [WebinarController::class, 'delete'])->name('webinar.delete');

});

Route::prefix('category')->group(function() {
    Route::get('/category/view', [CategoryController::class, 'index'])->name('category.view');
    Route::get('/category/add', [CategoryController::class, 'categoryAdd'])->name('category.add');
    Route::post('/category/store', [CategoryController::class, 'categoryStore'])->name('category.store');
    //Route::get('/category/edit{id}', [CategoryController::class, 'categoryEdit'])->name('category.edit');
});


