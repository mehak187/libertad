<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyActivities extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'sight_seeing',
        'include',
        'des',
        'img',
    ];
}
