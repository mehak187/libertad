<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nights',
        'city',
        'des',
        'img',
        'sight_seeing',
        'include',
        'exclude',
        'price'
    ];
}
