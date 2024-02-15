<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

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

Route::get('/task', [TaskController::class, 'index']);
Route::get('/voters', [VoterController::class, 'viewVoter']);

Route::get('/av_sc', [SubjectController::class, 'adminview']);
Route::get('/sv_sc', [SubjectController::class, 'studentview']);
Route::get('/tv_sc', [SubjectController::class, 'teacherview']);

Route::get('/au_uc', [UserController::class, 'adminuser']);
Route::get('/su_uc', [UserController::class, 'studentuser']);
Route::get('/tu_uc', [UserController::class, 'teacheruser']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/servis', function () {
    return view('services');
});


Route::get("/", function(){
    return view('welcome');
});