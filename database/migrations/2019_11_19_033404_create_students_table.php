<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('majority_id')->unsigned();
            $table->string('name',50);
            $table->string('address',250);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('students',function (Blueprint $table){
            $table->foreign('majority_id')->references('id')->on('majorities');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
