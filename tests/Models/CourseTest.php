<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\Course;

it('can create a course', function () {
    $course = Course::factory()->create([
        'name' => 'Ensino Fundamental',
        'slug' => 'ensino-fundamental',
    ]);

    expect($course->name)->toBe('Ensino Fundamental')
        ->and($course->slug)->toBe('ensino-fundamental')
        ->and($course->exists)->toBeTrue();
});

it('can use factory to create course', function () {
    $course = Course::factory()->create();

    expect($course->name)->toBeString()
        ->and($course->slug)->toBeString()
        ->and($course->exists)->toBeTrue();
});
