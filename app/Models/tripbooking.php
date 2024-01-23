<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tripbooking extends Model
{
    use HasFactory;
    protected $fillable = [
        'trip_id',
        'fname',
        'lname',
        'email',
        'phone',
        'nationality'
    ];
}
