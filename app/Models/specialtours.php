<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialtours extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'price',
        'nights',
        'sight_seeing',
        'include',
        'exclude',
        'des',
        'img',
    ];
}
