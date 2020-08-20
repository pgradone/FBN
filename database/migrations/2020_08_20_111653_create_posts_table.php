<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_post_id');
            $table->foreignId('author_id');
            $table->string('title',2);
            $table->longText('content');
            $table->text('summary');
            $table->string('reference',255);
            $table->string('status',20);
            $table->unsignedSmallInteger('post_type_id');
            $table->unsignedSmallInteger('language_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
