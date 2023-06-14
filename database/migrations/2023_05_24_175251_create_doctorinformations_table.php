<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctorinformations', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('doctor_specialist')->nullable();
            $table->string('doctor_image')->nullable();
            $table->string('time_to')->nullable();
            $table->string('time_from')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('hospital_name')->nullable();
            $table->string('hospital_address')->nullable();
            $table->string('doctor_fee')->nullable();
            $table->string('room_no')->nullable();
            $table->string('day')->nullable();
            $table->string('degree')->nullable();
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
        Schema::dropIfExists('doctorinformations');
    }
};
