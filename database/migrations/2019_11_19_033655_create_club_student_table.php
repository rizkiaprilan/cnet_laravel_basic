<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_student', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('club_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('club_student',function (Blueprint $table){
            $table->foreign('student_id')->references('id')->on('students');
         });

         Schema::table('club_student',function (Blueprint $table){
             $table->foreign('club_id')->references('id')->on('clubs');
         });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('club_student');
    }
}
