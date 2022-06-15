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
        Schema::create('planes_seats', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table-> string("seat_num");
            $table-> unsignedBigInteger("plane_id");
            $table-> unsignedBigInteger("class_id");
            $table->foreign("plane_id")->references("id")->on("planes");
            $table->foreign("class_id")->references("id")->on("planes_classes");
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
        Schema::dropIfExists('planes_seats');
    }
};
