<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indexreview extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'review'
    ];
}
