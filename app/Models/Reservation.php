<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        "booking_date",
        "canceled",
        "pre_booking",
        "flight_id",
        "user_id",
        "status_id",
        "class_id"  ,
        "seat_id",
    ];
    protected $table = 'flight_reservations';

    public function seat() {
        return $this->belongsTo(PlaneSeat::class, 'seat_id');
    }
}
