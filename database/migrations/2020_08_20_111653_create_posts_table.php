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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_post_id')->references('id')->on('posts');
            $table->foreignId('author_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreignId('language_id')->nullable()->references('id')->on('languages')->onUpdate('cascade')->default(2);
            $table->foreignId('post_type_id')->nullable()->references('id')->on('post_types')->onUpdate('cascade');
            $table->string('title',2);
            $table->longText('content');
            $table->text('summary');
            $table->string('reference',255);
            $table->string('status',20);
            // $table->unsignedSmallInteger('post_type_id');
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
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
