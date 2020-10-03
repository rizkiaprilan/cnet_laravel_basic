<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('student_id')->unsigned();
            $table->string('nim',50);
            $table->integer('balance');
            $table->timestamps();
            $table->softDeletes();
        });

        // Schema::table('cards',function (Blueprint $table){
        //     $table->foreign('student_id')->references('id')->on('students');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
