<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNekosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nekos', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name",30);
            $table->integer("type_code");
            $table->string("gender",10);
            $table->integer("age");
            $table->integer("place_code");
            $table->integer("shop_code");
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
        Schema::dropIfExists('nekos');
    }
}
