<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteDay extends Model
{
    use HasFactory;
    protected $fillable = [
        'site_id',
        'day_title',
        'day_des'
    ];
}
