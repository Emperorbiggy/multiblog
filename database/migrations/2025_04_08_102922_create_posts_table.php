<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();  // Primary key for the post (auto-incremented)
            $table->unsignedBigInteger('tenant_id');  // Foreign key for tenant
            $table->unsignedBigInteger('author_id');  // Foreign key for the user (author)
            $table->string('title');  // The title of the post
            $table->text('content');  // The content of the post
            $table->string('slug')->unique();  // A URL-friendly version of the title
            $table->enum('status', ['draft, pending', 'published, pending', 'achieved, published, approved'])->default('draft, pending');  // Status of the post
            $table->timestamp('published_at')->nullable();  // The timestamp when the post was published
            $table->timestamps();  // Laravel's default created_at and updated_at

            // Add foreign key constraints
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
