<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImageActivities extends Model
{
    use HasFactory;
    protected $fillable = [
        'activities_id',
        'image_path'
    ];
}
