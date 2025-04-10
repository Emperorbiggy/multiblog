<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request)
{
    // Sanitize and validate input
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
    ]);
    
    // Sanitize email and password
    $validated['email'] = filter_var(trim($validated['email']), FILTER_SANITIZE_EMAIL);
    $validated['password'] = trim($validated['password']);
    
    // Ensure valid email format
    if (!filter_var($validated['email'], FILTER_VALIDATE_EMAIL)) {
        return response()->json(['message' => 'Invalid email format.'], 400);
    }

    // Check if the user already exists (this checks if a token exists too)
    $existingUser = User::where('email', $validated['email'])->first();
    if ($existingUser) {
        // Ensure this returns a JSON response
        return response()->json(['message' => 'User already exists.'], 409);
    }

    // Create the user
    $user = User::create([
        'name' => htmlspecialchars($validated['name']),
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
        'status' => 'pending', 
    ]);

    return response()->json([
        'message' => 'Registration successful. Awaiting admin approval.',
        'user' => $user,
    ], 201);
}

public function login(Request $request)
{
    // Sanitize and validate input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    // Sanitize email and password
    $email = filter_var(trim($request->email), FILTER_SANITIZE_EMAIL);
    $password = trim($request->password);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return response()->json(['message' => 'Invalid email format.'], 400);
    }

    // Fetch user by email
    $user = User::where('email', $email)->first();

    if (!$user || !Hash::check($password, $user->password)) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    if ($user->status !== 'approved') {
        return response()->json(['message' => 'Your account is not yet approved'], 403);
    }

    // Check if the user is admin
    if ($user->role === 'admin') {
        // Generate a token for the admin
        $token = $user->createToken('admin_api_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user,
        ]);
    }

    // For non-admin users, proceed with regular login (e.g., tenants or users)
    $token = $user->createToken('api_token')->plainTextToken;

    return response()->json([
        'access_token' => $token,
        'token_type' => 'Bearer',
        'user' => $user,
    ]);
}
}
