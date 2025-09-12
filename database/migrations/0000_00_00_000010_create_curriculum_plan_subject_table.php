<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('curriculum_plan_subject', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curriculum_plan_id')->constrained('curriculum_plan');
            $table->foreignId('subject_id')->constrained('subject');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('curriculum_plan_subject');
    }
};
