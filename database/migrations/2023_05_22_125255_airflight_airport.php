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
        Schema::create('airflight_airport', function (Blueprint $table) {
            $table->unsignedBigInteger('airflight_id');
            $table->foreign('airflight_id')->references('id')->on('airflights');
            $table->unsignedBigInteger('airport_id');
            $table->foreign('airport_id')->references('id')->on('airports');
            $table->primary(['airflight_id', 'airport_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airflight_airport');

    }
};
