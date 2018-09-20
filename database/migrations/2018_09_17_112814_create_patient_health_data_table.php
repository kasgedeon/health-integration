<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientHealthDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_health_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id'); //patient data belongs to
            $table->string('blood_type');
            $table->string('food_allergies');
            $table->string('drug_allergies');
            $table->string('genetic_conditions');
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
        Schema::dropIfExists('patient_health_datas');
    }
}
