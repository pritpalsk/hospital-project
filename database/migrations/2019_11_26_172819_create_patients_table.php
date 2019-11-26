<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('fname');
            $table->string('lname');
            $table->date('dob');
            $table->integer('ssn')->unique();
            $table->enum('gender', array('M','F'));
            $table->integer('phonenum');
            $table->mediumText('address');
            $table->integer('deptID');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
