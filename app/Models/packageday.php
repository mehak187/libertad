<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packageday extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_id',
        'day_title',
        'day_des'
    ];
}
