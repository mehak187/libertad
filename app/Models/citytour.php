<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citytour extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'price',
        'nights',
        'city',
        'sight_seeing',
        'include',
        'exclude',
        'des',
        'img',
    ];
    public function galleryImages()
{
    return $this->hasMany(GalleryImage::class);
}
}
