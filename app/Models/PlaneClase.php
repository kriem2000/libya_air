<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaneClase extends Model
{
    use HasFactory;
    protected $table = 'planes_classes';
    protected $fillable = [
        'class_name',
    ];
}
