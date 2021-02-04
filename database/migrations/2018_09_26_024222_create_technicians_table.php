<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechniciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technicians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('region');
            $table->string('city');
            $table->string('store_name');
            $table->string('store_address');
            $table->string('contact_number');
            $table->string('date_started');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middle_initial');
            $table->string('position');
            $table->string('years_in_service');
            $table->string('birthday');
            $table->string('educational_attainment');
            $table->string('incentive');
            $table->string('remarks');
            $table->string('source');
            $table->string('level');
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
        Schema::dropIfExists('technicians');
    }
}
