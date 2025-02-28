<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;

    protected $fillable = [

        'code',
        'type',
        'name',
        'email',
        'phone_number',
        'industry',
        'address',
        'description',

    ];
}
