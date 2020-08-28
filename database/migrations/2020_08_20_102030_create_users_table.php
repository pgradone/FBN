<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->foreignId('language_id')->nullable()->default(2)->references('id')->on('languages')->onUpdate('cascade');
      // $table->foreignId('role_id')->nullable()->default(2)->references('id')->on('roles')->onUpdate('cascade');
      $table->string('name')->unique();
      $table->string('email')->unique();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password');
      //adding roles to the user *** redundant with role_id which will be deleted
      $table->enum('role', ['admin', 'author', 'subscriber'])->default('author');
      $table->rememberToken();
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
    Schema::dropIfExists('users');
  }
}
