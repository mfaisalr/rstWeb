<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors_schedules', function (Blueprint $table) {
            $table->id();

            // Foreign key doctor_id to reference doctors table
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('dokters')->onDelete('cascade');

            // Foreign key poliklinik_id to reference polikliniks table
            $table->unsignedBigInteger('poliklinik_id');
            $table->foreign('poliklinik_id')->references('id')->on('polikliniks')->onDelete('cascade');

            $table->string('day_start');
            $table->string('day_end');
            $table->time('time_start');
            $table->time('time_end');

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
        Schema::dropIfExists('doctors_schedules');
    }
}
