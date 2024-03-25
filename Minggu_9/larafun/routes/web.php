<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Login\RegisterController;
use App\Http\Controllers\Login\ForgotPasswordController;
use App\Http\Controllers\Login\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\GuruController;


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

Route::get('/', [UserController::class, 'index']);

Route::post('/login', [LoginController::class, 'login']); //route post untuk login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/forgot_password', [ForgotPasswordController::class, 'index']);

Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth'); //route untuk dashboard diperlukan login terlebih dahulu
Route::get('/pengaturan_akun', [UserController::class, 'option'])->middleware('auth'); //route untuk option diperlukan login terlebih dahulu

Route::get('/guru', [GuruController::class, 'index']);

Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus']);
Route::get('/guru/trash', [GuruController::class, 'trash']);
Route::get('/guru/kembalikan_semua', [GuruController::class, 'kembalikan_semua']);
Route::get('/guru/restore/{id}', [GuruController::class, 'restore']);

Route::get('/upload', [UploadController::class, 'upload']);
Route::post('/upload/proses', [UploadController::class, 'proses_upload']);

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout'); //route untuk logout
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
