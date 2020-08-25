<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes_contents', function (Blueprint $table) {
            $table->foreignId('posts_id')->references('id')->on('posts')->onUpdate('cascade');
            $table->foreignId('ingredients_id')->references('id')->on('ingredients')->onUpdate('cascade');
            $table->primary(['posts_id', 'ingredients_id']);
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
        Schema::dropIfExists('recipes_contents');
    }
}
