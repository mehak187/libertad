<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shuttle extends Model
{
    use HasFactory;
    protected $fillable = [
        'from',
        'to',
        'passengers',
        'price',
        'vehicle',
        'img',
    ];
}
