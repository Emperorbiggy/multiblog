<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'author_id',
        'author_name',
        'title',
        'content',
        'slug',
        'status',
        'published_at',
        'is_draft',
        'is_published',
        'is_approved',
        'category',
        'short_description',
        'image_urls',
        'thumbnail',
    ];
    
    

    // Define relationship with the Tenant model
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    // Define relationship with the Author (User) model
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // Optionally, you can add a helper to check the status or transition
    public function isDraftPending()
    {
        return $this->status === 'draft, pending';
    }

    public function isPublishedPending()
    {
        return $this->status === 'published, pending';
    }

    public function isAchievedPublishedApproved()
    {
        return $this->status === 'achieved, published, approved';
    }
}
