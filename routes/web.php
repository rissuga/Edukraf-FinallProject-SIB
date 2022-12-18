<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\WebinarController;
use App\Http\Controllers\backend\AdminAccountController;
use App\Http\Controllers\backend\LogoutController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ClassroomController;
use App\Http\Controllers\backend\DashboardController;

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


Route::prefix('')->group(function () {
    Route::get('/', function () {return view('frontend.index');})->name('home');
    Route::get('/beranda', [WebinarController::class, 'fiturshow'])->name('home');
    Route::get('/', [CategoryController::class, 'categoryshow']);
    Route::get('/ensiklopedia', function () {return view('frontend.ensiklopedia');})->name('ensiklopedia');
    Route::get('/komunitas', function () {return view('frontend.komunitas');})->name('komunitas');
    Route::get('/Tentang Kami', function () {return view('frontend.aboutus');})->name('tentangKami');
    Route::get('/category', [CategoryController::class, 'show'])->name('category');
    Route::get('/webinar', [WebinarController::class, 'show'])->name('webinar');
    Route::get('/webinar/soon', [WebinarController::class, 'show_soon'])->name('webinar_soon');
    Route::get('/webinar/done', [WebinarController::class, 'show_done'])->name('webinar_done');
    Route::get('/webinar/detail{id}', [WebinarController::class, 'detail'])->name('webinardetail');
    Route::get('/class{id}', [ClassroomController::class, 'show'])->name('class');
    Route::get('/class/detail{id}', [ClassroomController::class, 'detail'])->name('classdetail');
    
});



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    
    Route::get('/dashboard', function () {return view('admin.dashboard');})->name('dashboard');

    Route::get('/dashboard', [DashboardController::class, 'panelDashboard'])->name('webinar.dashboard');
    // Route::get('/dashboard', [WebinarController::class, 'panelDashboard'])->name('totalWebinar');

    Route::get('/webinar/view', [WebinarController::class, 'index'])->name('webinar.view');
    Route::get('/webinar/add', [WebinarController::class, 'add'])->name('webinar.add');
    Route::post('/webinar/store', [WebinarController::class, 'store'])->name('webinar.store');   
    Route::get('/webinar/edit/{id}', [WebinarController::class, 'edit'])->name('webinar.edit');
    Route::get('/webinar/update', [WebinarController::class, 'update'])->name('webinar.update');
    Route::get('/webinar/delete/{id}', [WebinarController::class, 'delete'])->name('webinar.delete');
    Route::get('/webinar/detail/{id}', [WebinarController::class, 'detailAdmin'])->name('webinar.detail');
    Route::get('/webinar/cancel', [WebinarController::class, 'cancel'])->name('webinar.cancel');

    Route::get('/category/view', [CategoryController::class, 'index'])->name('category.view');
    Route::get('/category/add', [CategoryController::class, 'add'])->name('category.add');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/category/update', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete{id}', [CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/category/cancel', [CategoryController::class, 'cancel'])->name('category.cancel');

    Route::get('/classroom/view', [ClassroomController::class, 'index'])->name('classroom.view');
    Route::get('/classroom/add', [ClassroomController::class, 'add'])->name('classroom.add');
    Route::post('/classroom/store', [ClassroomController::class, 'store'])->name('classroom.store');
    Route::get('/classroom/edit{id}', [ClassroomController::class, 'edit'])->name('classroom.edit');
    Route::put('/classroom/update{id}', [ClassroomController::class, 'update'])->name('classroom.update');
    Route::get('/classroom/delete{id}', [ClassroomController::class, 'delete'])->name('classroom.delete');
    Route::get('/classroom/cancel', [ClassroomController::class, 'cancel'])->name('classroom.cancel');
    Route::get('/classroom/detail{id}', [ClassroomController::class, 'detailAdmin'])->name('classroom.detail');

    Route::get('/account/view', [AdminAccountController::class, 'index'])->name('admin.view');
    Route::get('/account/add', [AdminAccountController::class, 'add'])->name('admin.add');
    Route::post('/account/store', [AdminAccountController::class, 'store'])->name('admin.store');
    Route::get('/account/edit/{id}', [AdminAccountController::class, 'edit'])->name('admin.edit');
    Route::post('/account/update/{id}', [AdminAccountController::class, 'update'])->name('admin.update');
    Route::get('/account/delete/{id}', [AdminAccountController::class, 'delete'])->name('admin.delete');
    Route::get('/account/cancel', [AdminAccountController::class, 'cancel'])->name('admin.cancel');
    
    Route::get('/account/logout', [LogoutController::class, 'logout'])->name('admin.logout');

});










// Route::get('/webinar/cancel', [WebinarController::class, 'cancel'])->name('webinar.cancel');

// Route::prefix('users')->middleware('auth')->group(function () {
//     Route::get('/view', [AdminAccountController::class, 'index'])->name('admin.view');
//     Route::get('/add', [AdminAccountController::class, 'add'])->name('admin.add');
//     Route::post('/store', [AdminAccountController::class, 'store'])->name('admin.store');
//     Route::get('/edit/{id}', [AdminAccountController::class, 'edit'])->name('admin.edit');
//     Route::post('/update/{id}', [AdminAccountController::class, 'update'])->name('admin.update');
//     Route::get('/delete/{id}', [AdminAccountController::class, 'delete'])->name('admin.delete');
//     Route::get('/account/logout', [LogoutController::class, 'logout'])->name('admin.logout');
// });


// Route::prefix('webinar')->middleware('auth')->group(function () {
     
//     Route::get('view', [WebinarController::class, 'index'])->name('webinar.view');
//     Route::get('add', [WebinarController::class, 'add'])->name('webinar.add');
//     Route::post('store', [WebinarController::class, 'store'])->name('webinar.store');   
//     Route::get('edit/{id}', [WebinarController::class, 'edit'])->name('webinar.edit');
//     Route::get('update', [WebinarController::class, 'update'])->name('webinar.update');
//     Route::get('delete/{id}', [WebinarController::class, 'delete'])->name('webinar.delete');
//     Route::get('detail/{id}', [WebinarController::class, 'detail'])->name('webinar.detail');
// });

// Route::prefix('category')->middleware('auth')->group(function() {
//     Route::get('view', [CategoryController::class, 'index'])->name('category.view');
//     Route::get('/tampil', [CategoryController::class, 'tampil'])->name('category.tampil');
//     Route::get('add', [CategoryController::class, 'add'])->name('category.add');
//     Route::post('store', [CategoryController::class, 'store'])->name('category.store');
//     Route::get('edit{id}', [CategoryController::class, 'edit'])->name('category.edit');
//     Route::get('update', [CategoryController::class, 'update'])->name('category.update');
//     Route::get('delete{id}', [CategoryController::class, 'delete'])->name('category.delete');
// });

// Route::prefix('classroom')->middleware('auth')->group(function() {
//     Route::get('view', [ClassroomController::class, 'index'])->name('classroom.view');
//     Route::get('/tampil/{id}', [ClassroomController::class, 'tampil'])->name('classroom.tampil');
//     Route::get('add', [ClassroomController::class, 'add'])->name('classroom.add');
//     Route::post('store', [ClassroomController::class, 'store'])->name('classroom.store');
//     Route::get('edit{id}', [ClassroomController::class, 'edit'])->name('classroom.edit');
//     Route::put('update{id}', [ClassroomController::class, 'update'])->name('classroom.update');
//     Route::get('delete{id}', [ClassroomController::class, 'delete'])->name('classroom.delete');
//     Route::get('detail{id}', [ClassroomController::class, 'detail'])->name('classroom.detail');

// });







