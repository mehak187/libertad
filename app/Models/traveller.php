<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class traveller extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id',
        'f_name',
        'l_name',
        'dob',
        'passport',
    ];
}
