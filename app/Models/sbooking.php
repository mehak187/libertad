<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sbooking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'shuttle_id',
        'price',
        'people',
        'type',
        'date',
        'pick_time',
        'pick_location',
        'drop_time',
        'drop_location',
    ];
}
