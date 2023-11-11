<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'office_location',
        'map_location',
        'phone1',
        'phone2',
        'email1',
        'email2',
        'tripadvisor',
        'fb_link',
        'google',
        'yt_link',
        'insta_link',
        'des',
    ];
}
