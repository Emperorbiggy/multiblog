<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('posts', function (Blueprint $table) {
        $table->string('category')->nullable();
        $table->text('short_description')->nullable();
        $table->json('image_urls')->nullable(); // store multiple image URLs
        $table->string('thumbnail')->nullable(); // for a primary thumbnail image
    });
}

public function down()
{
    Schema::table('posts', function (Blueprint $table) {
        $table->dropColumn(['category', 'short_description', 'image_urls', 'thumbnail']);
    });
}


    /**
     * Reverse the migrations.
     */
   
};
