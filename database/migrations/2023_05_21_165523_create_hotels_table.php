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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('location', 255);
            $table->text('description');
            $table->float('average_rate');
            $table->string('phone');
            $table->string('website', 255);
            $table->integer('room_price');
            $table->boolean('active')->nullable();
            $table->dateTime('published_at');

                
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
