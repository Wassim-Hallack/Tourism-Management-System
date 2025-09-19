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
        Schema::create('tourism_places', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->string('location');
            $table->integer('yearly_visitors');
            $table->text('description');
            $table->string('thumbnail')->nullable();
            $table->boolean('active')->nullable();
            $table->dateTime('published_at');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourism_places');
    }
};
