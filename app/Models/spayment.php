<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id',
        'amount',
        'currency',
        'stripe_token',
        'description'
    ];
}
