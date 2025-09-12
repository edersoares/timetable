<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('grade', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('course');
            $table->string('name', 50);
            $table->string('slug', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grade');
    }
};
