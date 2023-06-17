<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'firname',
        'midname',
        'lasname',
        'birthdate',
        'street',
        'barangay',
        'status',
        'town',
        'fname',
        'mname',
    ];
}
