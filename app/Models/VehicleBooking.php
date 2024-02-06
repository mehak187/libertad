<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleBooking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'shuttle_id',
        'from',
        'to',
        'name',
        'type',
        'people',
        'date'
    ];
}
