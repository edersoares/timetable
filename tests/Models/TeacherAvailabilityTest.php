<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\DayOfWeek;
use Portabilis\Timetable\Models\TeacherAvailability;

test('can create a teacher availability', function () {
    $dayOfWeek = DayOfWeek::factory()->create();
    $teacherAvailability = TeacherAvailability::factory()->create([
        'day_of_week_id' => $dayOfWeek->id,
        'start_time' => '08:00:00',
        'end_time' => '17:00:00',
    ]);

    expect($teacherAvailability->day_of_week_id)->toBe($dayOfWeek->id)
        ->and($teacherAvailability->start_time)->toBe('08:00:00')
        ->and($teacherAvailability->end_time)->toBe('17:00:00')
        ->and($teacherAvailability->exists)->toBeTrue();
});

test('can use factory to create teacher availability', function () {
    $teacherAvailability = TeacherAvailability::factory()->create();

    expect($teacherAvailability->day_of_week_id)->toBeInt()
        ->and($teacherAvailability->start_time)->toBeString()
        ->and($teacherAvailability->end_time)->toBeString()
        ->and($teacherAvailability->exists)->toBeTrue();
});

test('belongs to day of week', function () {
    $teacherAvailability = TeacherAvailability::factory()->create();

    expect($teacherAvailability->dayOfWeek)->toBeInstanceOf(DayOfWeek::class);
});
