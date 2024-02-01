<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userhotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'room',
        'people',
        'from',
        'to',
        'rent_catg',
        'des',
        'tourimg'
    ];
}
