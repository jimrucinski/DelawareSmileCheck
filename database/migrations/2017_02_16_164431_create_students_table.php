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
            $table->string('student_fName');
            $table->string('student_lName');
            $table->date('student_DOB')->nullable();
            $table->integer('school');
            $table->string('student_teacher');
            $table->integer('student_grade')->nullable();
            $table->string('parent_fName')->nullable()->default('NULL');
            $table->string('parent_lName')->nullable()->default('NULL');
            $table->string('parent_address1')->nullable()->default('NULL');
            $table->string('parent_address2')->nullable()->default('NULL');
            $table->string('parent_city')->nullable()->default('NULL');
            $table->string('parent_state')->nullable()->default('NULL');
            $table->string('parent_zip')->nullable()->default('NULL');
            $table->string('parent_phone')->nullable()->default('NULL');
            $table->integer('student_race')->nullable();
            $table->text('student_allergies')->nullable();
            $table->text('student_medicalConditions')->nullable();

            $table->timestamps();
        });
    }
     
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
