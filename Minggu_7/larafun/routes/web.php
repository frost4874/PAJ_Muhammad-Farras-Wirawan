<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Login\RegisterController;
use App\Http\Controllers\Login\ForgotPasswordController;
use App\Http\Controllers\Login\LogoutController;
use App\Http\Controllers\UserController;

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
