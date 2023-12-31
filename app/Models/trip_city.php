<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trip_city extends Model
{
    use HasFactory;
    protected $fillable = [
        'uid',
        'city',
    ];
}
