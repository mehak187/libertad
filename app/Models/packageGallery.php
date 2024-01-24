<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packageGallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_id',
        'image_path'
    ];
}
