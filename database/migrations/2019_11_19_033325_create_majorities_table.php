<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMajoritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('majorities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('faculty_id')->unsigned();
            $table->string('name',50);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('majorities',function (Blueprint $table){
            $table->foreign('faculty_id')->references('id')->on('faculties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('majorities');
    }
}
