<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolCalendarTable extends Migration
{
    public function up(): void
    {
        Schema::create('school_calendar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('academic_year_id')->constrained('academic_year');
            $table->foreignId('school_id')->constrained('school');
            $table->string('name', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('school_calendar');
    }
}
