<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImageMusuem extends Model
{
    use HasFactory;
    protected $fillable = [
        'musuem_id',
        'image_path'
    ];
}
