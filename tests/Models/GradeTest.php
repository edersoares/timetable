<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\Course;
use Portabilis\Timetable\Models\Grade;

it('can create a grade', function () {
    $course = Course::factory()->create();
    $grade = Grade::factory()->create([
        'course_id' => $course->id,
        'name' => '1º Ano',
        'slug' => '1-ano',
    ]);

    expect($grade->name)->toBe('1º Ano')
        ->and($grade->slug)->toBe('1-ano')
        ->and($grade->course_id)->toBe($course->id)
        ->and($grade->exists)->toBeTrue();
});

it('can use factory to create grade', function () {
    $grade = Grade::factory()->create();

    expect($grade->name)->toBeString()
        ->and($grade->slug)->toBeString()
        ->and($grade->course_id)->toBeInt()
        ->and($grade->exists)->toBeTrue();
});

it('belongs to a course', function () {
    $grade = Grade::factory()->create();

    expect($grade->course)->toBeInstanceOf(Course::class);
});
