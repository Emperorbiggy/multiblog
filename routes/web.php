<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Public Routes (No authentication required)
Route::get('/', function () {
    return view('index');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/signin', function () {
    return view('login');
});

// Authenticated Routes (protected by auth middleware)
Route::middleware('auth')->group(function () {
    // Dashboard Route for non-admin users (returns the tenant dashboard view)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Admin Routes (protected by role check)
    Route::middleware('admin')->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/admin/blog', function () {
            return view('admin.blog');
        });
        Route::get('/admin/add/post', function () {
            return view('admin.addpost');
        });
        Route::get('/admin/users', function () {
            return view('admin.users');
        });
    });
});

// Auth Routes (handled by AuthController)
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
