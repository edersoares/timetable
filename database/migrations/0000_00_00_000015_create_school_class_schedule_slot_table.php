<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolClassScheduleSlotTable extends Migration
{
    public function up(): void
    {
        Schema::create('school_class_schedule_slot', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_class_schedule_id')->constrained('school_class_schedule');
            $table->foreignId('shift_id')->nullable()->constrained('shift');
            $table->foreignId('day_of_week_id')->nullable()->constrained('day_of_week');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('school_class_schedule_slot');
    }
}
