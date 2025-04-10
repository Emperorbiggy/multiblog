<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Tenant; 
use App\Models\Post;

class AdminController extends Controller
{
    public function approveUser($userId)
    {
        // Find the user by ID or fail if not found
        $user = User::findOrFail($userId);
    
        // Check if the user is already reviewed (approved or rejected)
        if ($user->status !== 'pending') {
            return response()->json(['message' => 'User already reviewed.'], 400);
        }
    
        // Generate a unique subdomain
        $subdomain = strtolower(str_replace(' ', '-', $user->name)) . '-' . uniqid();
    
        try {
            // Create a Tenant for the approved user
            Tenant::create([
                'name' => $user->name,
                'subdomain' => $subdomain,
                'user_id' => $user->id,
            ]);
    
            // If tenant creation is successful, update the user's status and role
            $user->status = 'approved';
            $user->role = 'tenant';
            $user->save();
    
            // Return success response
            return response()->json(['message' => 'User approved, and tenant created.']);
        } catch (\Exception $e) {
            // If tenant creation fails, return an error response and don't update user status
            return response()->json(['message' => 'Tenant creation failed. User status not updated.'], 500);
        }
    }
    

    
    public function rejectUser($userId)
    {
        $user = User::findOrFail($userId);
        $user->status = 'rejected';
        $user->save();
    
        return response()->json(['message' => 'User rejected']);
    }
    public function listUsers(Request $request)
{
    // Ensure the logged-in user is an admin
    if ($request->user()->role !== 'admin') {
        return response()->json(['message' => 'Unauthorized'], 403);
    }

    // Fetch all users
    $users = User::all();

    // Filter out the users with 'admin' role and those with null role
    $filteredUsers = $users->filter(function($user) {
        return $user->role !== 'admin';  // Exclude users with 'admin' role
    });

    return response()->json([
        'users' => $filteredUsers
    ]);
}
public function approvePost($id)
{
    // Find the post by ID
    $post = Post::findOrFail($id);

    // Ensure the post is published but not yet approved
    if (!$post->is_published || $post->is_approved) {
        return response()->json(['message' => 'Post cannot be approved.'], 400);
    }

    // Approve the post
    $post->is_approved = true;
    $post->save();

    return response()->json(['message' => 'Post approved successfully.']);
}
public function rejectPost($id)
{
    // Find the post by ID
    $post = Post::findOrFail($id);

    // Check if the post is eligible for rejection (e.g., it's published but pending approval)
    if (!$post->is_published || $post->is_approved) {
        return response()->json(['message' => 'Post cannot be rejected.'], 400);
    }

    // Reject the post
    $post->is_approved = false;
    $post->is_published = false; // Optional: Unpublish the post upon rejection
    $post->save();

    return response()->json(['message' => 'Post rejected successfully.']);
}

public function fetchAllPosts(Request $request)
{
    // Ensure the user is an admin
    $user = $request->user();

    if ($user->role !== 'admin') {
        return response()->json(['message' => 'Unauthorized'], 403);
    }

    // Fetch all posts, including both published and unpublished
    $posts = Post::all();

    return response()->json(['posts' => $posts]);
}

public function deleteAllPosts(Request $request)
{
    // Log the authenticated user for debugging
    \Log::info('Authenticated User:', ['user' => $request->user()]);

    // Ensure the user is an admin
    $user = $request->user();

    if (!$user) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    if ($user->role !== 'admin') {
        return response()->json(['message' => 'Unauthorized'], 403);
    }

    Post::truncate();

    return response()->json(['message' => 'All posts have been deleted successfully.']);
}
    
}
