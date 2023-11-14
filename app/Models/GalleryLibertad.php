<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryLibertad extends Model
{
    use HasFactory;
    protected $fillable = [
        'libertad_id',
        'image_path'
    ];
}
