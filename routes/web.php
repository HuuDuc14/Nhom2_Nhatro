<?php

use App\Http\Controllers\PhongTroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phongtro', [PhongTroController::class,'index'])->name('phongtro.index');


Route::get('/phongtro/search', [PhongTroController::class,'search'])->name('phongtro.search');

Route::get('/phongtro/create', [PhongTroController::class,'create'])->name('phongtro.create');
Route::post('/phongtro/store', [PhongTroController::class,'store'])->name('phongtro.store');

Route::get('/phongtro/edit/{id}', [PhongTroController::class, 'edit'])->name('phongtro.edit');
Route::post('/phongtro/update', [PhongTroController::class,'update'])->name('phongtro.update');

Route::get('/phongtro/delete/{id}', [PhongTroController::class, 'delete'])->name('phongtro.delete');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
// Route::get('/recoverpassword', [AuthController::class, 'showRecoverPasswordForm'])->name('recoverpassword');
// Route::post('/recoverpassword', [AuthController::class, 'recoverpassword']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/recoverpassword', [AuthController::class, 'showRecoverPasswordForm'])->name('recoverpassword');
Route::post('/recoverpassword', [AuthController::class, 'recoverpassword']);
Route::get('/rememberpassword', [AuthController::class, 'showRememberPasswordForm'])->name('rememberpassword');
Route::post('/rememberpassword', [AuthController::class, 'rememberpassword']);

