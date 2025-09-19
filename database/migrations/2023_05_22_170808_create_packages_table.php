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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotel_id');
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->unsignedBigInteger('restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->unsignedBigInteger('airflight_id');
            $table->foreign('airflight_id')->references('id')->on('airflights');
            $table->unsignedBigInteger('tourism_id');
            $table->foreign('tourism_id')->references('id')->on('tourism_places');
            $table->timestamps();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('price');
            $table->boolean('active')->nullable();
            $table->string('thumbnail')->nullable();
            $table->dateTime('published_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
