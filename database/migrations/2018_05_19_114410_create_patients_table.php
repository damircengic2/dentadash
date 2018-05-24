<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->increments('id');
            $table->string('Fname')->nullable();
            $table->string('lname')->nullable();
            $table->date('DoB')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Country')->nullable();
            $table->string('Address')->nullable();
            $table->string('PostalCode')->nullable();
            $table->string('City')->nullable();
            $table->string('Email')->nullable();
            $table->string('JMBG')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->string('Picture')->nullable();
            $table->string('DentalRecord')->nullable();
            $table->string('svg')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patients');
    }
}
