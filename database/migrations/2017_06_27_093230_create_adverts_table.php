<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("daily_limit");
            $table->integer("total_clicks");
            $table->integer("success_buys");
            $table->string("link");
            $table->integer("price");
            $table->integer("shows");
            $table->boolean("active"); 
            $table->integer("category_id")->unsigned();
            $table->integer("size_id")->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adverts;');
    }
}
