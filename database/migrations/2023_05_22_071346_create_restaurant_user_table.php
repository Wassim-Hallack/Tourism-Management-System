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
        Schema::create('restaurant_usermobile', function (Blueprint $table) {
            $table->id();
            $table->integer('restaurant_reserve_price');
            $table->integer('restaurant_reserve_tablenum');
            $table->dateTime('restaurant_reserve_date');
            $table->smallInteger('restaurant_reserve_personsnum');
            $table->unsignedBigInteger('restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->unsignedBigInteger('usermobile_id');
            $table->foreign('usermobile_id')->references('id')->on('usermobiles');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant_users');
    }
};
