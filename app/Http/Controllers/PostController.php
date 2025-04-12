<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index(Request $request)
{
    // Check if the user is authenticated
    $user = $request->user();

    // If the user is an admin, show all published posts
    if ($user && $user->role === 'admin') {
        // Fetch all published posts
        $posts = Post::where('is_published', true)->get();
    } 
    // If the user is a tenant, show only posts for that tenant
    elseif ($user && $user->role === 'tenant') {
        $posts = Post::where('tenant_id', $user->tenant->id)->get();
    } 
    // If the user is neither admin nor tenant (i.e., others), show only published posts
    else {
        // Show only published posts to guests/visitors
        $posts = Post::where('is_published', true)->get();
    }

    // Return the posts as a response
    return response()->json(['posts' => $posts]);
}


public function store(Request $request)
{
    // Validate incoming request data
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'status' => 'required|in:draft,published',
        'category' => 'nullable|string|max:255',
        'short_description' => 'nullable|string|max:500',
        'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // Handle multiple images
    ]);

    // Get the authenticated user's tenant
    $tenant = auth()->user()->tenant;

    // Ensure status is lowercase for consistent comparison
    $status = strtolower($validated['status']); // Convert status to lowercase
    \Log::info('Status received:', ['status' => $status]); // Log the status received from the frontend

    // Determine if the post is a draft or published based on the normalized status
    $isDraft = $validated['status'] === 'draft';
    $isPublished = !$isDraft;

    \Log::info('Post draft or published:', ['isDraft' => $isDraft, 'isPublished' => $isPublished]); // Log the status determination

    // Set the destination path for storing images
    $destinationPath = public_path('post/images');

    // Create the directory if it doesn't exist
    if (!File::exists($destinationPath)) {
        File::makeDirectory($destinationPath, 0755, true);
    }

    // Handle thumbnail upload if present
    $thumbnailPath = null;
    if ($request->hasFile('thumbnail')) {
        $thumbnail = $request->file('thumbnail');
        $thumbnailName = 'thumb_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
        $thumbnail->move($destinationPath, $thumbnailName);
        $thumbnailPath = 'post/images/' . $thumbnailName;
    }

    // Handle additional images if present
    $imagePaths = [];
    if ($request->hasFile('images')) { // Ensure 'images' is the correct field name
        foreach ($request->file('images') as $image) {
            $imageName = 'img_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $imagePaths[] = 'post/images/' . $imageName;
        }
    }

    // Log paths for debugging
    \Log::info('Thumbnail and image paths:', [
        'thumbnail' => $thumbnailPath,
        'images' => $imagePaths
    ]);

    // Create the post in the database
    $post = Post::create([
        'tenant_id' => $tenant->id,
        'author_id' => auth()->id(),
        'author_name' => auth()->user()->name,
        'title' => $validated['title'],
        'content' => $validated['content'],
        'slug' => Str::slug($validated['title']) . '-' . uniqid(),
        'category' => $validated['category'] ?? null,
        'short_description' => $validated['short_description'] ?? null,
        'thumbnail' => $thumbnailPath,
        'image_urls' => json_encode($imagePaths),
        'is_draft' => $isDraft,
        'is_published' => $isPublished,
        'is_approved' => false, // Default to false
        'published_at' => now(), // Set the published date if published
    ]);

    

    // Return the newly created post in the response
    return response()->json(['post' => $post], 201);
}






    // Show a single post (owned by tenant)
    public function show($id, Request $request)
    {
        $user = $request->user();
        $post = Post::where('tenant_id', $user->tenant->id)->findOrFail($id);

        return response()->json(['post' => $post]);
    }
    public function getTenantPosts(Request $request)
{
    // Get the tenant associated with the logged-in user
    $user = $request->user();
    $tenant = $user->tenant;

    // If no tenant is found, return a 404 response
    if (!$tenant) {
        return response()->json(['message' => 'Tenant not found for this user.'], 404);
    }

    // Fetch all posts related to the tenant
    $posts = Post::where('tenant_id', $tenant->id)->get();

    // Return the posts as JSON
    return response()->json(['posts' => $posts]);
}
public function fetchAllPublishedPosts()
{
    $posts = Post::where('is_approved', true)->get();

    return response()->json([
        'status' => 'success',
        'data' => $posts
    ]);
}



    // Update a post
    public function update(Request $request, $id)
{
    $user = $request->user();
    $post = Post::where('tenant_id', $user->tenant->id)->findOrFail($id);

    $validated = $request->validate([
        'title' => 'sometimes|string|max:255',
        'content' => 'sometimes|string',
        'status' => 'sometimes|in:draft,published',
    ]);

    if (isset($validated['status'])) {
        $isDraft = $validated['status'] === 'draft';
        $isPublished = !$isDraft;

        $post->is_draft = $isDraft;
        $post->is_published = $isPublished;
        $post->published_at = $isPublished ? now() : null;

        unset($validated['status']);
    }

    $post->fill($validated)->save();

    return response()->json(['message' => 'Post updated', 'post' => $post]);
}

    // Delete a post
    public function destroy($id, Request $request)
    {
        $user = $request->user();
        $post = Post::where('tenant_id', $user->tenant->id)->findOrFail($id);

        $post->delete();

        return response()->json(['message' => 'Post deleted']);
    }
    
}
