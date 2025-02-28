<?php

use App\Models\Project;
use App\Models\ProjectMilestone;
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
        Schema::create('project_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by')->nullable();
            $table->string('hashid')->nullable()->index();
            $table->foreignIdFor(Project::class)->constrained();
            $table->foreignIdFor(ProjectMilestone::class)->nullable()->constrained();
            $table->string('code')->unique()->index();
            $table->string('name')->index();
            $table->date('start_date')->nullable();
            $table->date('due_date')->nullable();
            $table->integer('priority');
            $table->string('status')->default('to-do');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_tasks');
    }
};
