<?php

namespace App\Models;

use App\Traits\HashidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;
    use HashidTrait;

    protected $fillable = [
        'user_id',
        'lead_source_id',
        'pipeline_stage_id',
        'code',
        'type',
        'name',
        'email',
        'phone_number',
        'industry',
        'address',
        'description',

    ];


    public static function booted(): void
    {
        self::created(function (Customer $customer) {
            $customer->pipelineStageLogs()->create([
                'pipeline_stage_id' => $customer->pipeline_stage_id,
                'user_id' => $customer->user_id,
            ]);
        });

        self::updated(function (Customer $customer) {
            $lastLog = $customer->pipelineStageLogs()->whereNotNull('user_id')->latest()->first();

            if ($customer->user_id !== $lastLog) {
                $customer->pipelineStageLogs()->create([
                    'user_id' => $customer->user_id,
                    'notes' => is_null($customer->user_id) ? 'Employee removed' : '',
                ]);
            }
        });
    }

    public function leadBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function leadSource(): BelongsTo
    {
        return $this->belongsTo(LeadSource::class);
    }

    public function pipelineStage(): BelongsTo
    {
        return $this->belongsTo(PipelineStage::class);
    }

    public function pipelineStageLogs(): HasMany
    {
        return $this->hasMany(CustomerPipelineStage::class);
    }

    // public function documents(): HasMany
    // {
    //     return $this->hasMany(Document::class);
    // }




}