<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\School;

test('can create a school', function () {
    $school = School::factory()->create([
        'name' => 'Test School',
        'slug' => 'test-school',
    ]);

    expect($school->name)->toBe('Test School')
        ->and($school->slug)->toBe('test-school')
        ->and($school->exists)->toBeTrue();
});

test('can use factory to create school', function () {
    $school = School::factory()->create();

    expect($school->name)->toBeString()
        ->and($school->slug)->toBeString()
        ->and($school->exists)->toBeTrue();
});
