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
        Schema::create('airflights', function (Blueprint $table) {
            $table->id();
            $table->dateTime('departure_datetime');
            $table->dateTime('arrival_datetime');
            $table->float('price');
            $table->boolean('active')->nullable();
            $table->dateTime('published_at');
            $table->unsignedBigInteger('airline_id');
            $table->foreign('airline_id')->references('id')->on('airlines');
            $table->unsignedBigInteger('flightclass_id');
            $table->foreign('flightclass_id')->references('id')->on('flightclasses');
            $table->unsignedBigInteger('statet_id');
            $table->foreign('statet_id')->references('id')->on('states');
            $table->unsignedBigInteger('statel_id');
            $table->foreign('statel_id')->references('id')->on('states');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airflights');
    }
};
