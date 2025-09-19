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
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',45);
            $table->string('middle_name',45);
            $table->string('last_name',45);
            $table->string('gender',6);
            $table->string('nationality',45);
            $table->string('passport');
            $table->dateTime('expiration_date');
            $table->unsignedBigInteger('usermobile_id');
            $table->foreign('usermobile_id')->references('id')->on('usermobiles');
            $table->unsignedBigInteger('nationality_id');
            $table->foreign('nationality_id')->references('id')->on('nationalities');
            $table->unsignedBigInteger('airflight_id');
            $table->foreign('airflight_id')->references('id')->on('airflights');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passengers');
    }
};
