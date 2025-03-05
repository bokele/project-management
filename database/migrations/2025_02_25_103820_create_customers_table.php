<?php

use App\Models\LeadSource;
use App\Models\PipelineStage;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by')->nullable();
            $table->string('hashid')->nullable()->index();
            $table->foreignIdFor(PipelineStage::class)->nullable();
            $table->foreignIdFor(User::class)->nullable();
            $table->foreignIdFor(LeadSource::class)->nullable();
            $table->string('code')->unique()->index();
            $table->string('type')->default('person'); //person company
            $table->string('name')->nullable()->index();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('description')->nullable();
            $table->string('industry')->nullable()->index();
            $table->text('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};