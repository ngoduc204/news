<?php

// use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BanTinController;
use App\Http\Controllers\Admin\DanhMucController;
use App\Http\Controllers\Admin\MyAdminController;
use App\Http\Controllers\Admin\UserAdminController;

use App\Http\Controllers\Client\AuthenController;
use App\Http\Controllers\Client\CommentController;
use App\Http\Controllers\Client\NewsController;
use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\MemberController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsMember;
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

// Route::get('/detail', function () {
//     return view('client.detail');
// });
Route::get('login', [AuthenController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthenController::class, 'handleLogin']);

Route::get('register', [AuthenController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthenController::class, 'handleRegister']);

Route::post('logout', [AuthenController::class, 'logout'])->name('logout');

Route::get('member', [MemberController::class, 'dashboard'])
    ->name('client.index')
    ->middleware(['auth', IsMember::class]);


    Route::get('/user/edit', [AuthenController::class, 'edit'])->name('user.edit');
    Route::put('/user/update', [AuthenController::class, 'update'])->name('user.update');

Route::get('admin', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard')
    ->middleware(['auth', IsAdmin::class]);
Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::resource('admin/categories', DanhMucController::class);
    Route::resource('admin/news', BanTinController::class);


    Route::get('admin/users/admins', [UserAdminController::class, 'adminsIndex'])->name('admin.users.admins.index');
    Route::get('admin/users/create', [UserAdminController::class, 'createAdmin'])->name('admin.users.admins.create');
    Route::post('admin/users/store', [UserAdminController::class, 'storeAdmin'])->name('admin.users.admins.store');
    Route::get('admin/users/{id}/edit', [UserAdminController::class, 'editAdmin'])->name('admin.users.admins.edit');
    Route::put('admin/users/{id}', [UserAdminController::class, 'updateAdmin'])->name('admin.users.admins.update');
    Route::put('admin/users/{id}/reset-password', [UserAdminController::class, 'resetPassword'])->name('admin.users.admins.reset-password');


    Route::get('admin/users/myadmin/{id}/edit', [MyAdminController::class, 'editProfile'])->name('admin.users.myadmin.edit');
    Route::put('profile', [MyAdminController::class, 'updateProfile'])->name('admin.users.myadmin.update');
});

Route::middleware(['auth', IsMember::class])->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('client.index');

    Route::get('/{news}', [NewsController::class, 'show'])->name('client.show');
    Route::get('/member/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
    Route::post('/news/{news}/comments', [CommentController::class, 'store'])->name('comments.store');
});
Route::get('/', [NewsController::class, 'index'])->name('client.index');

Route::get('/{news}', [NewsController::class, 'show'])->name('client.show');
Route::get('/member/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
// use App\Http\Controllers\CommentController;

Route::get('/news/{news}/comments', [CommentController::class, 'showComments'])->name('comments.show');

