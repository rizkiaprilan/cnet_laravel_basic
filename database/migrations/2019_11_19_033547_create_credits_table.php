<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('card_id')->unsigned();
            $table->string('name',50);
            $table->integer('balance');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('credits',function (Blueprint $table){
            $table->foreign('card_id')->references('id')->on('cards');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credits');
    }
}
