<?php

use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\News\CategoryController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminIndexController::class, 'index'])->name('index');
});

Route::prefix('news')->name('news.')->group(function() {
    Route::get('/', [NewsController::class, 'index'])->name('index');
    Route::get('/{id}', [NewsController::class, 'show'])->where('id', '[0-9]+')->name('show');
    Route::get('/create', [NewsController::class, 'create'])->name('create');

    Route::prefix('category')->name('category.')->group(function() {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/{name}', [CategoryController::class, 'show'])->name('show');
    });
});

Route::get('/home', [HomeController::class, 'index',])->name('home');

Route::view('/login1', 'auth.login')->name('login1');
