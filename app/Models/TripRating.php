<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripRating extends Model
{
    use HasFactory;
    protected $fillable = [
        'stour_id',
        'user_id',
        'star',
        'review',
    ];
}
