<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminMainController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    } else if (auth()->user()->role === 'user') {
        return redirect()->route('user.dashboard');
    }

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




// Admin routes with role-based access control
Route::middleware(['auth', 'verified', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminMainController::class, 'dashboard'])->name('dashboard');

    Route::get('/users', [AdminMainController::class, 'users'])->name('users');

    Route::get('/colleges', [AdminMainController::class, 'colleges'])->name('colleges');
});


// User routes with role-based access control
Route::middleware(['auth', 'verified', 'user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', function () {
        return view('UserPages.dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
