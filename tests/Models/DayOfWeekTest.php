<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\DayOfWeek;

test('can create a day of week', function () {
    $dayOfWeek = DayOfWeek::factory()->create([
        'slug' => 'monday',
    ]);

    expect($dayOfWeek->slug)->toBe('monday')
        ->and($dayOfWeek->exists)->toBeTrue();
});

test('can use factory to create day of week', function () {
    $dayOfWeek = DayOfWeek::factory()->create();

    expect($dayOfWeek->slug)->toBeString()
        ->and($dayOfWeek->exists)->toBeTrue();
});
