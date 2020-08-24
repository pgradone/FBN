<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientNameTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ingredients_names', function (Blueprint $table) {
			$table->foreignId('ingredient_id')->references('id')->on('ingredients')->onUpdate('cascade');
			$table->foreignId('language_id')->references('id')->on('languages')->onUpdate('cascade');
			$table->primary(['language_id', 'ingredient_id']);
			$table->string('name', 100)->comment('ingredients name in given languages');
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
		Schema::dropIfExists('ingredient_name');
	}
}
