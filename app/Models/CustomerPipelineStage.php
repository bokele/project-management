<?php

namespace App\Models;

use App\Traits\HashidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerPipelineStage extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerPipelineStageFactory> */
    use HasFactory, HashidTrait;
    protected $fillable = [
        'created_by',
        'hashid',
        'customer_id',
        'user_id',
        'pipeline_stage',
        'notes',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function pipelineStage(): BelongsTo
    {
        return $this->belongsTo(PipelineStage::class);
    }
}