<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppointmentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable();
            $table->date('start_time')->nullable();
            $table->date('End_time')->nullable();
            $table->string('Patient_ID')->nullable();
            $table->string('Doctor_ID')->nullable();
            $table->string('Status')->nullable();
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
        Schema::drop('Appointments');
    }
}
