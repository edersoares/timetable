<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\DayOfWeek;
use Portabilis\Timetable\Models\SchoolClassSchedule;
use Portabilis\Timetable\Models\SchoolClassScheduleSlot;
use Portabilis\Timetable\Models\Shift;

test('can create a school class schedule slot', function () {
    $schedule = SchoolClassSchedule::factory()->create();
    $shift = Shift::factory()->create();
    $dayOfWeek = DayOfWeek::factory()->create();

    $slot = SchoolClassScheduleSlot::factory()->create([
        'school_class_schedule_id' => $schedule->id,
        'shift_id' => $shift->id,
        'day_of_week_id' => $dayOfWeek->id,
        'start_time' => '08:00:00',
        'end_time' => '09:00:00',
    ]);

    expect($slot->school_class_schedule_id)->toBe($schedule->id)
        ->and($slot->shift_id)->toBe($shift->id)
        ->and($slot->day_of_week_id)->toBe($dayOfWeek->id)
        ->and($slot->start_time)->toBe('08:00:00')
        ->and($slot->end_time)->toBe('09:00:00')
        ->and($slot->exists)->toBeTrue();
});

test('can use factory to create school class schedule slot', function () {
    $slot = SchoolClassScheduleSlot::factory()->create();

    expect($slot->school_class_schedule_id)->toBeInt()
        ->and($slot->shift_id)->toBeInt()
        ->and($slot->day_of_week_id)->toBeInt()
        ->and($slot->start_time)->toBeString()
        ->and($slot->end_time)->toBeString()
        ->and($slot->exists)->toBeTrue();
});

test('belongs to school class schedule, shift and day of week', function () {
    $slot = SchoolClassScheduleSlot::factory()->create();

    expect($slot->schoolClassSchedule)->toBeInstanceOf(SchoolClassSchedule::class)
        ->and($slot->shift)->toBeInstanceOf(Shift::class)
        ->and($slot->dayOfWeek)->toBeInstanceOf(DayOfWeek::class);
});
