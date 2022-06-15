<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_reservations', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table-> datetime("booking_date");
            $table-> boolean("canceled");
            $table-> boolean("pre_booking");
            $table-> unsignedBigInteger("flight_id");
            $table-> unsignedBigInteger("user_id");
            $table-> unsignedBigInteger("status_id");
            $table-> unsignedBigInteger("class_id");
            $table-> unsignedBigInteger("seat_id");
            $table->foreign("flight_id")->references("id")->on("flights");
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("status_id")->references("id")->on("paymentstatus");
            $table->foreign("class_id")->references("id")->on("planes_classes");
            $table->foreign("seat_id")-> references("id")->on("planes_seats");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_reservations');
    }
};
