<?php

namespace App\Models;

use App\Traits\HashidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectPipeline extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectPipelineFactory> */
    use HasFactory, HashidTrait;

    protected $fillable = [
        'created_by',
        'stringhashid',
        'name',
        'position',
        'is_default',
    ];
}
