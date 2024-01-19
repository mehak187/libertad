<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'tour_id',
        'tour_name',
        'role',
        'date',
        'people',
        't_price',
        'address',
    ];
}
