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
        Schema::create('airflight_usermobile', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('airflight_id');
            $table->foreign('airflight_id')->references('id')->on('airflights');
            $table->unsignedBigInteger('usermobile_id');
            $table->foreign('usermobile_id')->references('id')->on('usermobiles');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
