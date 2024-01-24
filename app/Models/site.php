<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class site extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'nights',
        'city',
        'des',
        'img',
        'price',
    ];
}
