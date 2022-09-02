<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaneSeat extends Model
{
    use HasFactory;
    protected $table = 'planes_seats';
    protected $fillable = [
        'seat_num',
        'plane_id',
        'class_id',
    ];

    public function reservation() {
        return $this->hasOne(Reservation::class, 'seat_id');
    }
}
