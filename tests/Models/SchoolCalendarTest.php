<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\AcademicYear;
use Portabilis\Timetable\Models\School;
use Portabilis\Timetable\Models\SchoolCalendar;

test('can create a school calendar', function () {
    $academicYear = AcademicYear::factory()->create();
    $school = School::factory()->create();
    $schoolCalendar = SchoolCalendar::factory()->create([
        'academic_year_id' => $academicYear->id,
        'school_id' => $school->id,
        'name' => 'Calendário Escolar 2024',
    ]);

    expect($schoolCalendar->name)->toBe('Calendário Escolar 2024')
        ->and($schoolCalendar->academic_year_id)->toBe($academicYear->id)
        ->and($schoolCalendar->school_id)->toBe($school->id)
        ->and($schoolCalendar->exists)->toBeTrue();
});

test('can use factory to create school calendar', function () {
    $schoolCalendar = SchoolCalendar::factory()->create();

    expect($schoolCalendar->name)->toBeString()
        ->and($schoolCalendar->academic_year_id)->toBeInt()
        ->and($schoolCalendar->school_id)->toBeInt()
        ->and($schoolCalendar->exists)->toBeTrue();
});

test('belongs to academic year and school', function () {
    $schoolCalendar = SchoolCalendar::factory()->create();

    expect($schoolCalendar->academicYear)->toBeInstanceOf(AcademicYear::class)
        ->and($schoolCalendar->school)->toBeInstanceOf(School::class);
});
