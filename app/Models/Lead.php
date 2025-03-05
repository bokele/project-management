<?php

namespace App\Models;

use App\Traits\HashidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    /** @use HasFactory<\Database\Factories\LeadFactory> */
    use HasFactory, HashidTrait;

    protected $fillable = [
        'created_by',
        'hashid',
        'customer_id',
        'user_id',
        'status',
    ];
}