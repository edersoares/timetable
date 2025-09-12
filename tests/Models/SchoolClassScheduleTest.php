<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\SchoolClassSchedule;

test('can create a school class schedule', function () {
    $schedule = SchoolClassSchedule::factory()->create([
        'name' => 'Quadro de Horários 2024',
    ]);

    expect($schedule->name)->toBe('Quadro de Horários 2024')
        ->and($schedule->exists)->toBeTrue();
});

test('can use factory to create school class schedule', function () {
    $schedule = SchoolClassSchedule::factory()->create();

    expect($schedule->name)->toBeString()
        ->and($schedule->exists)->toBeTrue();
});
