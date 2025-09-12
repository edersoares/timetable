<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayOfWeekTable extends Migration
{
    public function up(): void
    {
        Schema::create('day_of_week', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 50)->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('day_of_week');
    }
}
