<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculumPlanTable extends Migration
{
    public function up(): void
    {
        Schema::create('curriculum_plan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grade_id')->constrained('grade');
            $table->string('name', 50);
            $table->string('slug', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('curriculum_plan');
    }
}
