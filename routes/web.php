<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

// ! Main Start
Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact')->middleware('auth');
    Route::post('/contact/store', 'contactStore')->name('sendMessage')->middleware('auth');
    Route::get('/articles', 'articles')->name('articles')->middleware('auth');
    Route::get('/articles/{article}', 'detail')->name('articleDetail')->middleware('auth');
    Route::get('/laptops', 'laptops')->name('laptops')->middleware('auth');
    Route::get('/laptos/{laptop}', 'laptopDetail')->name('laptopDetail')->middleware('auth');
});
// ! Main End

// ! Admin Start
// * Dashboard Page
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// * Articles Page
Route::resource('/dashboard/article', ArticleController::class)->middleware('auth');

// * Laptops Page
Route::resource('/dashboard/laptop', LaptopController::class)->middleware('auth');

// * Message Page
Route::resource('/dashboard/message', MessageController::class)->only(['index', 'destroy'])->names([
    'index' => 'message',
    'destroy' => 'delete'
])->parameters(['message' => 'name'])->middleware('auth');
// ! Admin End

// ! Users Start
Route::controller(UserController::class)->group(function () {
    // * Login & Register Page
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate')->name('authenticate')->middleware('guest');
    Route::get('/register', 'create')->name('register')->middleware('guest');
    Route::post('/register', 'store')->name('storeAcc')->middleware('guest');
    Route::post('/logout', 'logout')->name('logout');
    // * Profile Page
    Route::get('/profile/{user}', 'show')->name('profile')->middleware('auth');
    Route::get('/profile/{user}/edit', 'edit')->name('editProfile')->middleware('auth');
    Route::post('/profile/{user}/update', 'update')->name('updateProfile')->middleware('auth');
});
// ! Users End

Route::get('/settings', function () {
    return view('admin.settings', [
        'users' => User::all()
    ]);
})->name('settings')->middleware('auth');

Route::get('/401', function () {
    return view('error.notLoggedIn');
})->name('401')->middleware('guest');
