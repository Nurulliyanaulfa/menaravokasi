<?php

use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\posting;
use App\Models\Post;
use App\Models\Lamar;
use App\Models\Profileusaha;
use App\Models\Profilusaha;
/*
|-----------------------------------------------------------------------
---
| Web Routes
|-----------------------------------------------------------------------
---
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
Route::get('/auth/registerUsaha', [LoginRegisterController::class, 'registerUsaha'])->name('auth.registerUsaha');

Route::get('/auth/profileUsaha', [LoginRegisterController::class, 'profileUsaha'])->name('auth.profileUsaha');
Route::get('/auth/profilPelamar', [LoginRegisterController::class, 'profilePelamar'])->name('auth.profilPelamar');
Route::get('/admin/home', [AdminController::class, 'home'])->name('admin.home');
Route::post('/postProfileUsaha', [LoginRegisterController::class, 'postProfileUsaha'])->name('postProfileUsaha');
Route::post('/postProfilePelamar', [LoginRegisterController::class, 'postProfilePelamar'])->name('postProfilePelamar');

Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
    Route::get('/user/home', [UserController::class, 'userHome'])->name('user.home');
    
    Route::get('/user/profilUser', [UserController::class, 'userProfilUser'])->name('user.profilUser');
    Route::get('/user/Postingan', [UserController::class, 'userPostingan'])->name('user.Postingan');
    Route::get('/user/profilPelamar', [UserController::class, 'profillamar'])->name('user.profilPelamar');
    // Contoh pemanggilan di routes.php atau web.php
    Route::get('/user/lamar/{posting}', [UserController::class, 'lamar'])->name('user.lamar');
    Route::get('/user/detailPost/{id}', [UserController::class, 'userDetailPost'])->name('user.detailPost');
Route::get('/user/Riwayat', [UserController::class, 'userRiwayat'])->name('user.Riwayat');
Route::get('/user/editProfilPelamar/{id}', [UserController::class, 'editProfilPelamar'])->name('user.editProfilPelamar');
Route::get('/user/pembayaran/{id}', [UserController::class, 'pembayaran'])->name('user.pembayaran');

});

Route::post('/postLamar/{posting}', [UserController::class, 'postLamar'])->name('postLamar');
Route::post('/postEditProfilePelamar/{id}', [UserController::class, 'postEditProfilePelamar'])->name('postEditProfilePelamar');
Route::post('/postPembayaran/{id}', [UserController::class, 'postPembayaran'])->name('postPembayaran');





Route::group(['middleware' => ['auth', 'checklevel:userPerusahaan']], function () {
    Route::get('/userPerusahaan/home', [UserController::class, 'userPerusahaanHome'])->name('userPerusahaan.home');
    Route::get('/userPerusahaan/postingan', [UserController::class, 'userPerusahaanPostingan'])->name('userPerusahaan.postingan');
    Route::get('/userPerusahaan/tambahPostingan', [UserController::class, 'tambahPostingan'])->name('userPerusahaan.tambahPostingan');
    Route::get('/userPerusahaan/profile', [UserController::class, 'profile'])->name('userPerusahaan.profile');
    Route::get('/userPerusahaan/detailPostingan', [UserController::class, 'detail.Postingan'])->name('userPerusahaan.detailPostingan');
    Route::get('/editPostingan/{id}', [UserController::class, 'editPostingan'])->name('editPostingan');
    Route::get('/userPerusahaan/deletePostingan/{id}', [UserController::class, 'deletePostingan'])->name('admin.deletePostingan');
    Route::get('/userPerusahaan/pelamar/{posting}', [UserController::class, 'pelamar'])->name('userPerusahaan.pelamar');
    Route::get('/konfirmasi/{id}', [UserController::class, 'konfirmasi'])->name('konfirmasi');
    Route::get('/userPerusahaan/editProfilPerusahaan/{id}', [UserController::class, 'editProfilPerusahaan'])->name('userPerusahaan.editProfilPerusahaan');
});

Route::post('/postTambahPostingan', [UserController::class, 'postTambahPostingan'])->name('postTambahPostingan');
Route::post('/postTambahProfile', [UserController::class, 'postTambahProfile'])->name('postTambahProfile');
Route::post('/postEditPostingan/{id}', [UserController::class, 'postEditPostingan'])->name('postEditPostingan');
Route::post('/postDeletePostingan/{id}', [UserController::class, 'postDeletePostingan'])->name('postDeletePostingan');
Route::post('/postKonfirmasi/{id}', [UserController::class, 'postKonfirmasi'])->name('postKonfirmasi');
Route::post('/postEditProfilePerusahaan/{id}', [UserController::class, 'postEditProfilePerusahaan'])->name('postEditProfilePerusahaan');



Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/perusahaan', [AdminController::class, 'adminPerusahaan'])->name('admin.perusahaan');
    Route::get('/admin/tambahPerusahaan', [AdminController::class, 'admintambahPerusahaan'])->name('admin.tambahPerusahaan');
    Route::get('/edituserPerusahaan/{id}', [AdminController::class, 'edituserPerusahaan'])->name('editPerusahaan');
    Route::get('/deleteuserPerusahaan/{id}', [AdminController::class, 'deleteuserPerusahaan'])->name('deletePerusahaan');
    Route::get('/admin/vokasi', [AdminController::class, 'adminVokasi'])->name('admin.vokasi');
    Route::get('/admin/loker', [AdminController::class, 'adminloker'])->name('admin.loker');
    Route::get('/admin/unblockUser/{id}', [AdminController::class, 'unblockUser'])->name('admin.unblockUser');
Route::get('/admin/blokirUser/{id}', [AdminController::class, 'blokirUser'])->name('admin.blokirUser');
    Route::get('/admin/unblockUserPerusahaan/{id}', [AdminController::class, 'unblockUserPerusahaan'])->name('admin.unblockUserPerusahaan');
Route::get('/admin/blokirUserPerusahaan/{id}', [AdminController::class, 'blokirUserPerusahaan'])->name('admin.blokirUserPerusahaan');
Route::get('/konfirmasiPembayaran/{id}', [AdminController::class, 'konfirmasiPembayaran'])->name('konfirmasiPembayaran');

});
Route::post('/postKonfirmasiPembayaran/{id}', [AdminController::class, 'postKonfirmasiPembayaran'])->name('postKonfirmasiPembayaran');

Route::post('/posttambahPerusahaan', [AdminController::class, 'postTambahPerusahaan'])->name('postTambahPerusahaan');
Route::post('/postEdituserPerusahaan/{id}', [AdminController::class, 'postEdituserPerusahaan'])->name('postEdituserPerusahaan');
Route::post('/deleteAdmin/{id}', [AdminController::class, 'postdeleteuserPerusahaan'])->name('postdeleteuserPerusahaan');

Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
Route::post('/postRegisterUsaha', [LoginRegisterController::class, 'postRegisterUsaha'])->name('postRegisterUsaha');

Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
Route::post('/postTambahPostingan', [UserController::class, 'postTambahPostingan'])->name('postTambahPostingan');