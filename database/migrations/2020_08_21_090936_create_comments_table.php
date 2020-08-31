<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('comments', function (Blueprint $table) {
      $table->id();
      $table->foreignId('language_id')->nullable()->references('id')->on('languages')->onUpdate('cascade');
      $table->foreignId('on_post')->nullable()->references('id')->on('posts')->onUpdate('cascade');
      $table->foreignId('from_user')->nullable()->references('id')->on('users')->onUpdate('cascade');
      $table->longText('body');
      $table->string('rating', 2)->nullable();
      // $table->foreignId('approver_user_id')->nullable()->references('id')->on('users')->onUpdate('cascade');
      // $table->foreignId('parent_comment_id')->nullable()->references('id')->on('comments')->onUpdate('cascade');
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
    Schema::dropIfExists('comments');
  }
}
