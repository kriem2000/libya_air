<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    use HasFactory;
    protected $fillable = [
        "plane_num",
        "col_num_bs",
        "col_num_ec",
        "seat_num_bs",
        "seat_num_ec",
    ];
}
