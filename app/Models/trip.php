<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'cities',
        'persons',
        'days',
        'transportation',
        'date',
        'accommodation'
    ];
}
