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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_name');
            $table->integer('passenger_num');
            $table->integer('door_num');
            $table->float('price_day');
            $table->string('type');
            $table->boolean('air_conditioning');
            $table->boolean('active')->nullable();
            $table->string('thumbnail')->nullable();
            $table->dateTime('published_at');
            $table->unsignedBigInteger('carcompany_id');
            $table->foreign('carcompany_id')->references('id')->on('car_companies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
