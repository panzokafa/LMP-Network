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

// Route::group(['prefix' => 'product', 'middleware' => ['auth']], function () {
//     Route::get('MDC-Top', function () {
//         return view('user.product'); // You can return any response you want here
//     })->name('product');
// });

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

Route::get('polymer', function () {
    return view('user.polymer'); // You can return any response you want here
})->name('polymer');

Route::get('nex-t', function () {
    return view('user.nex-t'); // You can return any response you want here
})->name('nex-t');


Route::get('testing', function () {
    return view('user.testing'); // You can return any response you want here
})->name('testing');


Route::get('learning', function () {
    return view('user.learning'); // You can return any response you want here
})->name('learning');

Route::group(['prefix' => 'product'], function () {
    Route::get('mdc-top', function () {
        return view('user.product.mdc.top'); // You can return any response you want here
    })->name('product.mdc.top');

    Route::get('mdc-rack-split', function () {
        return view('user.product.mdc.rack-split');
    })->name('product.mdc.rack-split');

    Route::get('mdc-row-package', function () {
        return view('user.product.mdc.row-package');
    })->name('product.mdc.row-package');

    Route::get('mdc-row-split', function () {
        return view('user.product.mdc.row-split');
    })->name('product.mdc.row-split');

    Route::get('mdc-row', function () {
        return view('user.product.mdc.row');
    })->name('product.mdc.row');

    //Rack

    Route::get('rack-1', function () {
        return view('user.product.rack.1-rack');
    })->name('product.rack.1');

    Route::get('rack-2', function () {
        return view('user.product.rack.2-rack');
    })->name('product.rack.2');

    Route::get('rack-2-row', function () {
        return view('user.product.rack.2-rack-row');
    })->name('product.rack.2.row');

    Route::get('rack-3', function () {
        return view('user.product.rack.3-rack');
    })->name('product.rack.3');


    //container
    Route::get('container-10ft', function () {
        return view('user.product.container.10ft');
    })->name('product.container.10ft');

    Route::get('container-20ft', function () {
        return view('user.product.container.20ft');
    })->name('product.container.20ft');

    Route::get('container-40ft', function () {
        return view('user.product.container.40ft');
    })->name('product.container.40ft');

    Route::get('container-dual', function () {
        return view('user.product.container.dual-container');
    })->name('product.container.dual-container');

    //centrinium
    Route::get('containment-centrinium', function () {
        return view('user.product.centrinium.centrinium-containment');
    })->name('product.centrinium.centrinium-containment');

});
// Route::get('/', function () {
//     return view('welcome');
// });
