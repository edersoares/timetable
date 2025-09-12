<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\Shift;

test('can create a shift', function () {
    $shift = Shift::factory()->create([
        'name' => 'Matutino',
    ]);

    expect($shift->name)->toBe('Matutino')
        ->and($shift->exists)->toBeTrue();
});

test('can use factory to create shift', function () {
    $shift = Shift::factory()->create();

    expect($shift->name)->toBeString()
        ->and($shift->exists)->toBeTrue();
});
