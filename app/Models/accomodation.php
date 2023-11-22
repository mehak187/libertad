<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accomodation extends Model
{
    use HasFactory;
        protected $fillable = [
        'name',
        'location',
        'tour_price',
        'nights_nmbr',
        'rooms',
        'city',
        'sight_seeing',
        'include',
        'card_des',
        'tourimg'
    ];
}
