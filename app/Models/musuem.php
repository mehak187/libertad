<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class musuem extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'price',
        'city',
        'sight_seeing',
        'include',
        'des',
        'img',
    ];
}
