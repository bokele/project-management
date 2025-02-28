<?php

use App\Models\Customer;
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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by')->nullable();
            $table->string('hashid')->nullable()->index();
            $table->foreignIdFor(Customer::class)->nullable()->constrained();
            $table->foreignId('marger_id')->nullable();
            $table->string('code')->unique()->index();
            $table->string('name')->index();
            $table->integer('priority');
            $table->double('amount')->default(0);
            $table->date('start_date')->nullable();
            $table->date('due_date')->nullable();
            $table->longText('short_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};