<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('ingredients', function (Blueprint $table) {
      $table->id();
      $table->string('origin', 2)->nullable()->comment('Plant or Animal based');
      $table->string('nutriscore', 2)->nullable()->comment('A-F nutritional compliance');
      $table->string('picture', 255)->nullable();
      $table->foreignId('foodgroup_id')->nullable()->references('id')->on('foodgroups');
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
    Schema::dropIfExists('ingredients');
  }
}
