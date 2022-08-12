<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $fillable = [
        "flight_num",
        "flight_date",
        "bs_price",
        "ec_price",
        "plane_id",
        "origin_city",
        "dastination_city",
        "departure_air_id",
        "origin_air_id",
        "departure_gate_id",
        "origin_gate_id",
        "flight_img",
        "plane_id",
        "origin_city",
        "dastination_city",
        "departure_air_id",
        "origin_air_id",
        "departure_gate_id",
        "origin_gate_id"
    ];
}
