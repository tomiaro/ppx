<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codes', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->integer("total_clicks");
            $table->integer("shows");
            $table->boolean("active");
            $table->string("value");
              $table->string("url");
              $table->integer("profit"); 
            $table->integer("size_id")->unsigned();
            $table->integer("category_id")->nullable();
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
        Schema::dropIfExists('codes');
    }
}
