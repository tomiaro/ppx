<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string("description");
            $table->timestamps();
        });

        Schema::table('codes', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('size_id')->references('id')->on('sizes');
            $table->foreign('category_id')->references('id')->on('categories');
        });
        Schema::table('ad_records', function ($table) {
            $table->foreign('advert_id')->references('id')->on('adverts');
        });
        Schema::table('adverts', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('size_id')->references('id')->on('sizes');
        });
        Schema::table('images', function ($table) {
            $table->foreign('advert_id')->references('id')->on('adverts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
