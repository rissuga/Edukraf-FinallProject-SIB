<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\WebinarController;
use App\Http\Controllers\backend\AdminAccountController;
use App\Http\Controllers\backend\logoutController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ClassroomController;

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

Route::get('/account/logout', [logoutController::class, 'logout'])->name('admin.logout');

Route::prefix('users')->group(function () {
    Route::get('/admin/view/', [AdminAccountController::class, 'adminView'])->name('admin.view');
    Route::get('/admin/add', [AdminAccountController::class, 'adminAdd'])->name('admin.add');
    Route::post('/admin/store', [AdminAccountController::class, 'adminStore'])->name('admin.store');
    Route::get('/admin/edit/{id}', [AdminAccountController::class, 'adminEdit'])->name('admin.edit');
    Route::post('/admin/update/{id}', [AdminAccountController::class, 'adminUpdate'])->name('admin.update');
    Route::get('/admin/delete/{id}', [AdminAccountController::class, 'adminDelete'])->name('admin.delete');
});


Route::prefix('webinar')->group(function () {
    Route::get('/webinar/view', [WebinarController::class, 'index'])->name('webinar.view');
    Route::get('/webinar/add', [WebinarController::class, 'WebinarAdd'])->name('webinar.add');
    Route::post('/webinar/store', [WebinarController::class, 'WebinarStore'])->name('webinar.store');   
    Route::get('/webinar/edit/{id}', [WebinarController::class, 'WebinarEdit'])->name('webinar.edit');
    Route::get('/webinar/update', [WebinarController::class, 'WebinarUpdate'])->name('webinar.update');
    Route::get('/webinar/delete/{id}', [WebinarController::class, 'delete'])->name('webinar.delete');

});

Route::prefix('category')->group(function() {
    Route::get('/category/view', [CategoryController::class, 'index'])->name('category.view');
    Route::get('/category/add', [CategoryController::class, 'categoryAdd'])->name('category.add');
    Route::post('/category/store', [CategoryController::class, 'categoryStore'])->name('category.store');
    Route::get('/category/edit{id}', [CategoryController::class, 'categoryEdit'])->name('category.edit');
    Route::get('/category/update', [CategoryController::class, 'categoryUpdate'])->name('category.update');
    Route::get('/category/delete{id}', [CategoryController::class, 'categoryDelete'])->name('category.delete');
});

Route::prefix('classroom')->group(function() {
    Route::get('/classroom/view', [ClassroomController::class, 'index'])->name('classroom.view');
    Route::get('/classroom/add', [ClassroomController::class, 'add'])->name('classroom.add');
    Route::post('/classroom/store', [ClassroomController::class, 'store'])->name('classroom.store');
    Route::get('/classroom/edit{id}', [ClassroomController::class, 'edit'])->name('classroom.edit');
    Route::put('/classroom/update{id}', [ClassroomController::class, 'update'])->name('classroom.update');
    Route::get('/classroom/delete{id}', [ClassroomController::class, 'delete'])->name('classroom.delete');

});
