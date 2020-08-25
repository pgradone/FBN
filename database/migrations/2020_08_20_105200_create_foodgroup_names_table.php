<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodgroupNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodgroup_names', function (Blueprint $table) {
            $table->foreignId('foodgroup_id')->references('id')->on('foodgroups')->onUpdate('cascade');
            $table->foreignId('language_id')->nullable()->references('id')->on('languages')->onUpdate('cascade');
            $table->primary(['foodgroup_id', 'language_id']);
            $table->string('name',60)->comment('food group name in given languages');
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
        Schema::dropIfExists('foodgroup_names');
    }
}
