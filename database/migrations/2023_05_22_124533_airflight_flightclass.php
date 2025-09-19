<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('airflight_flightclass', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('airflight_id');
            $table->foreign('airflight_id')->references('id')->on('airflights');
            $table->unsignedBigInteger('flightclass_id');
            $table->foreign('flightclass_id')->references('id')->on('flightclasses');
            $table->smallInteger('passengers_num');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airflight_flightclass');

    }
};
