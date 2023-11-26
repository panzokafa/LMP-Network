<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;



use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\LoginController as UserLoginController;
use App\Http\Controllers\User\HomeController;




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

Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'authenticate'])->name('admin.login.auth');

// Route::group(['prefix' => 'admin','middleware' => ['admin.auth']], function () {
//     Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
//     Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
//     Route::get('user', [UserController::class, 'index'])->name('admin.user');
// });



Route::get('/register', [RegisterController::class, 'index'])->name('user.register');
Route::post('/register', [RegisterController::class, 'store'])->name('user.register.store');

Route::get('/login', [UserLoginController::class, 'index'])->name('user.login');
Route::post('/login', [UserLoginController::class, 'auth'])->name('user.login.auth');

Route::get('/', [HomeController::class, 'index'])->name('user.home');



// Route::get('/', function () {
//     return view('welcome');
// });