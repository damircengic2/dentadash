<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusinessDetailsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businessDetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('email')->nullable();
            $table->integer('numberID')->nullable();
            $table->integer('numberPDV')->nullable();
            $table->string('owner')->nullable();
            $table->date('RegistrationDate')->nullable();
            $table->string('City')->nullable();
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
        Schema::drop('businessDetails');
    }
}
