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
      $table->foreignId('parent_post_id')->nullable()->references('id')->on('posts');
      $table->foreignId('author_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
      $table->foreignId('language_id')->nullable()->references('id')->on('languages')->onUpdate('cascade')->default(2);
      $table->foreignId('post_type_id')->nullable()->references('id')->on('post_types')->onUpdate('cascade')->default(1);
      $table->string('title')->unique();
      $table->text('body');
      $table->string('slug')->nullable()->unique();
      $table->string('cover_image')->nullable();
      $table->boolean('active')->nullable();
      $table->text('summary')->nullable();
      $table->string('reference', 255);
      $table->string('status', 20);
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
