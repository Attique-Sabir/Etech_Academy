<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('student_name');
            $table->string('father_name');

            $table->bigInteger('age');

            $table->bigInteger('mobile_no');
            $table->string('gender');

            $table->string('address');

            $table->string('course_name');
            $table->string('course_duration');
            $table->dateTime('joining_date');

            $table->dateTime('ending_date');
            $table->bigInteger('course_fee');


            $table->bigInteger('discount_fee');

            $table->bigInteger('paid_fee');

            $table->bigInteger('remaining_fee');
            $table->string('image');
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
        Schema::dropIfExists('students');
    }
}
