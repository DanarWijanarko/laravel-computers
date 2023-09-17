<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/**
 *--------------------------------------------------------------------------
 * ! Web Routes
 *--------------------------------------------------------------------------
 *
 * * Here is where you can register web routes for your application. These
 * * routes are loaded by the RouteServiceProvider and all of them will
 * * be assigned to the "web" middleware group. Make something great!
 *
 */

Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/store', 'contactStore')->name('sendMessage');
    Route::get('/articles', 'articles')->name('articles');
    Route::get('/articles/slug', 'detail')->name('articleDetail');
    Route::get('/laptops', 'laptops')->name('laptops');
});

// Route::get('/', function () {
//     return view('main.static.index');
// })->name('home');

// Route::get('/about', function () {
//     return view('main.static.about');
// })->name('about');

// Route::get('/contact', function () {
//     return view('main.static.contact');
// })->name('contact');

// Route::get('/articles', function () {
//     return view('main.article.index', [
//         'navbar' => 'bg-slate-700'
//     ]);
// })->name('articles');

// Route::get('/laptops', function () {
//     return view('main.laptops.index');
// })->name('laptops');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/article', function () {
    return view('admin.article.edit');
})->name('edit-article');

Route::get('/article/create', function () {
    return view('admin.article.create');
})->name('create-article');

Route::get('/laptop', function () {
    return view('admin.laptop.edit');
})->name('edit-laptop');

Route::get('/laptop/create', function () {
    return view('admin.laptop.create');
})->name('create-laptop');

Route::get('/message', function () {
    return view('admin.message');
})->name('message');

Route::get('/login', function () {
    return view('users.login');
})->name('login');

Route::post('/doLogin', function () {
    return redirect('login')->with([
        'type' => 'danger',
        'message' => 'Login Failed!'
    ]);
})->name('doLogin');

Route::get('/register', function () {
    return view('users.register');
})->name('register');

Route::post('/doRegister', function () {
    return redirect('register')->with([
        'type' => 'success',
        'message' => 'Registrasi akun berhasil silahkan Login!'
    ]);
})->name('doRegister');

Route::post('/logout', function () {
    return "Yeyyy";
})->name('logout');
