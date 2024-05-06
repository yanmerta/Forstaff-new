<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Admin\FiturController;
use App\Http\Controllers\Admin\FiturKamiController;
use App\Http\Controllers\admin\HomeButtonController;
use App\Http\Controllers\admin\HomeInformasiController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\HomeServisController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\admin\LogoutController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\FrontpageController;
use Illuminate\Support\Facades\Route;




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

// Frontpage
Route::get('/', [FrontpageController::class, 'beranda'])->name('frontpage.beranda');
Route::get('/fitur', [FrontpageController::class, 'fitur'])->name('frontpage.fitur');
Route::get('/tentang', [FrontpageController::class, 'tentang'])->name('frontpage.tentang');
Route::get('/harga', [FrontpageController::class, 'harga'])->name('frontpage.harga');
Route::get('/blog', [FrontpageController::class, 'blog'])->name('frontpage.blog');
Route::get('/kontak', [FrontpageController::class, 'kontak'])->name('frontpage.kontak');

//Login Admin
Route::get('/admin', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login_proses'])->name('login.proses');

//Midleware routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'],
  function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/logout', [LogoutController::class, 'process'])->name('logoutProcess');

    //Manajamen Data User
    Route::get('/admin/users', [adminController::class, 'index'])->name('admin.users');
    Route::get('admin-users/create', [adminController::class, 'create'])->name('admin.users.create');
    Route::post('admin-users', [adminController::class, 'store'])->name('admin.users.store');
    Route::get('/admin-users/{user}/edit', [adminController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin-users/{user}/update', [adminController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}/delete', [adminController::class, 'destroy'])->name('admin.users.delete');

    //Update Perofile Admin
    Route::get('/profile', [ProfileController::class,'index',])->name('profile.index');
    Route::patch('/profile/{id}', [ProfileController::class,'update',])->name('profile.update');
    Route::delete('/admin/profile/{id}/delete-photo', [ProfileController::class, 'deletePhoto'])->name('profile.delete-photo');

    //Home Page 
    Route::get('/admin/home', [HomeController::class, 'index'])->name('home.index');
    Route::put('/home/{id}', [HomeController::class, 'update'])->name('home.update');

    Route::get('admin/homebutton', [HomeButtonController::class, 'index'])->name('homebutton.index');
    Route::get('homebutton/create', [HomeButtonController::class, 'create'])->name('homebutton.create');
    Route::post('homebutton/store', [HomeButtonController::class, 'store'])->name('homebutton.store');
    Route::get('homebutton/{id}/edit', [HomeButtonController::class, 'edit'])->name('homebutton.edit');
    Route::put('homebutton/{id}/update', [HomeButtonController::class, 'update'])->name('homebutton.update');
    Route::delete('/admin/homebutton/{homebutton}/delete', [HomeButtonController::class, 'destroy'])->name('homebutton.delete');

    Route::get('admin/homeservis', [HomeServisController::class, 'index'])->name('homeservis.index');
    Route::get('homeservis/create', [HomeServisController::class, 'create'])->name('homeservis.create');
    Route::post('homeservis/store', [HomeServisController::class, 'store'])->name('homeservis.store');
    Route::get('homeservis/{id}/edit', [HomeServisController::class, 'edit'])->name('homeservis.edit');
    Route::put('homeservis/{id}/update', [HomeServisController::class, 'update'])->name('homeservis.update');
    Route::delete('/admin/homeservis/{homeservis}/delete', [HomeServisController::class, 'destroy'])->name('homeservis.delete');


    Route::get('/homeinformasi',[HomeInformasiController::class, 'index'])->name('homeinformasi.index');
    Route::put('/homeinformasi/update/{id}', [HomeInformasiController::class, 'update'])->name('homeinformasi.update');

    // homeinformasi
    Route::get('/fitur',[FiturController::class, 'index'])->name('fitur.index');
    Route::put('/fitur/update/{id}', [FiturController::class, 'update'])->name('fitur.update');

    // Fitur Kami
    Route::get('admin/fiturkami', [FiturKamiController::class, 'index'])->name('fiturkami.index');
    Route::get('fiturkami/create', [FiturKamiController::class, 'create'])->name('fiturkami.create');
    Route::post('fiturkami/store', [FiturKamiController::class, 'store'])->name('fiturkami.store');
    Route::get('fiturkami/{id}/edit', [FiturKamiController::class, 'edit'])->name('fiturkami.edit');
    Route::put('fiturkami/{id}/update', [FiturKamiController::class, 'update'])->name('fiturkami.update');
    Route::delete('fiturkami/{fiturkami}/delete', [FiturKamiController::class, 'delete'])->name('fiturkami.delete');
});

