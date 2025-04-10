<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Public routes (no authentication required)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Authenticated routes with Sanctum (requires token)
Route::middleware('auth:sanctum')->group(function () {
    // API Resource for posts (CRUD operations)
    Route::apiResource('posts', PostController::class);
    Route::get('tenant/posts', [PostController::class, 'getTenantPosts']);
    

    // Admin routes (protected by AdminMiddleware)
    Route::middleware(AdminMiddleware::class)->group(function () {
        Route::get('/admin/users', [AdminController::class, 'listUsers']);
        Route::post('/admin/approve/{id}', [AdminController::class, 'approveUser']);
        Route::post('/admin/reject/{id}', [AdminController::class, 'rejectUser']);
        Route::put('/admin/posts/{id}/approve', [AdminController::class, 'approvePost']);
        Route::get('/admin/posts', [AdminController::class, 'fetchAllPosts']);
        Route::put('/admin/posts/{id}/reject', [AdminController::class, 'rejectPost']);
        Route::delete('/posts/delete-all', [AdminController::class, 'deleteAllPosts']);

    });

    // Test route to check if the user is authenticated
    Route::get('/test', function (Request $request) {
        return response()->json(['user' => $request->user()]);
    });
});

// Public route for posts (can be accessed without authentication)
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class, 'show']);
