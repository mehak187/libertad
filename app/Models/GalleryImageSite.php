<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImageSite extends Model
{
    use HasFactory;
    protected $fillable = [
        'site_id',
        'image_path'
    ];
}
