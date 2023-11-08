<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('home');
});

Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
});

Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');
});

Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
    Route::get('/user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
});

Route::group(['middlware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');});
    Route::post('/postBerita', [BeritaController::class, 'postBerita'])->name('postBerita');
    Route::get('/berita/form', [BeritaController::class, 'showBeritaForm'])->name('berita.form');
    Route::get('/admin/berita', [BeritaController::class, 'showberita'])->name('admin.berita');

Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
    Route::get('/user/home', [LoginRegisterController::class, 'userhome'])->name('user.home');
    Route::get('/user/berita', [BeritaController::class, 'berita'])->name('user.berita');
});

Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');


Route::get('/auth/news', [LoginRegisterController::class, 'news'])->name('auth.news');

Route::get('/auth/lulus', [LoginRegisterController::class, 'lulus'])->name('auth.lulus');

Route::get('/auth/dosen', [LoginRegisterController::class, 'dosen'])->name('auth.dosen');

Route::get('/admin/tambah_berita', [LoginRegisterController::class, 'tambah_berita'])->name('admin.tambah_berita');

Route::get('/admin/tambah_dosen', [LoginRegisterController::class, 'tambah_dosen'])->name('admin.tambah_dosen');

