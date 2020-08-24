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
            $table->foreignId('language_id')->references('id')->on('languages')->onUpdate('cascade');
            $table->foreignId('post_id')->references('id')->on('posts');
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->longText('content');
            $table->string('rating', 2);
            $table->foreignId('approver_user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreignId('parent_comment_id')->references('id')->on('comments');
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