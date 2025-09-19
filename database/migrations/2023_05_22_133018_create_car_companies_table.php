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
        Schema::create('car_companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('website');
            $table->string('phone');
            $table->boolean('active')->nullable();
            $table->string('thumbnail')->nullable();
            $table->dateTime('published_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_companies');
    }
};
