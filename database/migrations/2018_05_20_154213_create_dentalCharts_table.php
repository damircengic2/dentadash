<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDentalChartsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dentalCharts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('X_images')->nullable();
            $table->text('Medication')->nullable();
            $table->string('Allergies')->nullable();
            $table->text('Notes')->nullable();
            $table->text('complaints')->nullable();
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
        Schema::drop('dentalCharts');
    }
}
