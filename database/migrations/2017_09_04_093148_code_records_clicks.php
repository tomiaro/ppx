<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CodeRecordsClicks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code_records_clicks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("code_id")->unsigned(); 
            $table->timestamps();

        });


    Schema::table('codes', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('size_id')->references('id')->on('sizes');
          
        });
        Schema::table('ad_records', function ($table) {
            $table->foreign('advert_id')->references('id')->on('adverts');
        });
        Schema::table('code_records_shows', function ($table) {
            $table->foreign('code_id')->references('id')->on('codes');
        });

        Schema::table('code_records_clicks', function ($table) {
            $table->foreign('code_id')->references('id')->on('codes');
        });
        Schema::table('adverts', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
          
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
          Schema::dropIfExists('code_records_clicks');
    }
}
