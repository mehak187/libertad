<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
        protected $fillable = [
        'event_name',
        'city_name',
        'st_date',
        'st_time',
        'end_date',
        'end_time',
        'heading',
        'des',
    ];
}
