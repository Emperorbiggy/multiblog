<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterIsDraftAndIsPublishedColumnsInPostsTable extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // Change 'is_draft' and 'is_published' to tinyInteger (1 or 0)
            $table->tinyInteger('is_draft')->default(0)->change();
            $table->tinyInteger('is_published')->default(0)->change();
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // Revert back to boolean (this can be changed back based on needs)
            $table->boolean('is_draft')->default(false)->change();
            $table->boolean('is_published')->default(false)->change();
        });
    }
}
