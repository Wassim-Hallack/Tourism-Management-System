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
        Schema::create('hotel_usermobile', function (Blueprint $table) {
            $table->id();
            $table->integer('hotel_reserve_price');
            $table->datetime('hotel_reserve_date');
            $table->smallInteger('hotel_person_num');
            $table->smallInteger('hotel_room_num');
            $table->unsignedBigInteger('hotel_id');
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->unsignedBigInteger('usermobile_id');
            $table->foreign('usermobile_id')->references('id')->on('usermobiles');
            $table->unsignedBigInteger('hotels_room_type_id');
            $table->foreign('hotels_room_type_id')->references('id')->on('hotels_room_types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_users');
    }
};
