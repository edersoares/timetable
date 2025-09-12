<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('school_calendar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id')->constrained('school')->cascadeOnDelete();
            $table->string('name', 50);
            $table->integer('year');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('school_calendar');
    }
};
