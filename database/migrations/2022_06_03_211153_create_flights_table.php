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
        Schema::create('flights', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table-> integer("flight_num");
            $table-> datetime("flight_date");
            $table-> integer("bs_price");
            $table-> integer("ec_price");
            $table-> unsignedBigInteger("plane_id");
            $table-> unsignedBigInteger("origin_city");
            $table-> unsignedBigInteger("dastination_city");
            $table-> unsignedBigInteger("departure_air_id");
            $table-> unsignedBigInteger("origin_air_id");
            $table-> unsignedBigInteger("departure_gate_id");
            $table-> unsignedBigInteger("origin_gate_id");
            $table->string("flight_img");
            $table->foreign("plane_id")-> references("id")->on("planes");
            $table->foreign("origin_city")-> references("id")->on("cities");
            $table->foreign("dastination_city")-> references("id")->on("cities");
            $table->foreign("departure_air_id")-> references("id")->on("airports");
            $table->foreign("origin_air_id")-> references("id")->on("airports");
            $table->foreign("departure_gate_id")-> references("id")->on("gates");
            $table->foreign("origin_gate_id")-> references("id")->on("gates");
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
        Schema::dropIfExists('flights');
    }
};
