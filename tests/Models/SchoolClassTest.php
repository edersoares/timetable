<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\Grade;
use Portabilis\Timetable\Models\School;
use Portabilis\Timetable\Models\SchoolClass;

test('can create a school class', function () {
    $school = School::factory()->create();
    $grade = Grade::factory()->create();
    $schoolClass = SchoolClass::factory()->create([
        'grade_id' => $grade->id,
        'school_id' => $school->id,
        'name' => 'A',
        'slug' => 'a',
    ]);

    expect($schoolClass->name)->toBe('A')
        ->and($schoolClass->slug)->toBe('a')
        ->and($schoolClass->grade_id)->toBe($grade->id)
        ->and($schoolClass->school_id)->toBe($school->id)
        ->and($schoolClass->exists)->toBeTrue();
});

test('can use factory to create school class', function () {
    $schoolClass = SchoolClass::factory()->create();

    expect($schoolClass->name)->toBeString()
        ->and($schoolClass->slug)->toBeString()
        ->and($schoolClass->grade_id)->toBeInt()
        ->and($schoolClass->school_id)->toBeInt()
        ->and($schoolClass->exists)->toBeTrue();
});

test('belongs to a grade and school', function () {
    $schoolClass = SchoolClass::factory()->create();

    expect($schoolClass->grade)->toBeInstanceOf(Grade::class)
        ->and($schoolClass->school)->toBeInstanceOf(School::class);
});
