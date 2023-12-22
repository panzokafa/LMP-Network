<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;

use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\LoginController as UserLoginController;
use App\Http\Controllers\User\PageController;
use App\Http\Controllers\User\ProfileController;
// use App\Http\Controllers\User\Profile2Controller;

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

// Backend
Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'authenticate'])->name('admin.login.auth');

Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('user', [UserController::class, 'index'])->name('admin.user');
    Route::get('product', [ProductController::class, 'index'])->name('admin.product');
    Route::get('product/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('product/store', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');


});

// Front-End
Route::get('/register', [RegisterController::class, 'index'])->name('user.register');
Route::post('/register', [RegisterController::class, 'store'])->name('user.register.store');

Route::get('/login', [UserLoginController::class, 'index'])->name('user.login');
Route::post('/login', [UserLoginController::class, 'auth'])->name('user.login.auth');
Route::get('/logout', [UserLoginController::class, 'logout'])->name('user.logout');

Route::get('/', [PageController::class, 'index'])->name('user.home');
Route::get('/about', [PageController::class, 'about'])->name('user.about');

Route::group(['prefix' => 'user', 'middleware' => ['auth']], function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
    Route::get('edit/{id?}', [ProfileController::class, 'edit'])->name('user.edit');
    Route::put('update/{id?}', [ProfileController::class, 'update'])->name('user.update');
});

Route::get('research', function () {
    return view('user.research'); // You can return any response you want here
})->name('research');

Route::get('service', function () {
    return view('user.service'); // You can return any response you want here
})->name('service');

Route::get('solution', function () {
    return view('user.solution'); // You can return any response you want here
})->name('solution');

Route::get('partner', function () {
    return view('user.partner'); // You can return any response you want here
})->name('partner');

Route::get('contact', function () {
    return view('user.contact'); // You can return any response you want here
})->name('contact');

Route::get('support', function () {
    return view('user.support'); // You can return any response you want here
})->name('support');

Route::get('network', function () {
    return view('user.network'); // You can return any response you want here
})->name('network');

Route::get('centrinium', function () {
    return view('user.centrinium'); // You can return any response you want here
})->name('centrinium');

Route::get('energy', function () {
    return view('user.energy'); // You can return any response you want here
})->name('energy');

// Route::get('/', function () {
//     return view('welcome');
// });
