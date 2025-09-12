<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\School;
use Portabilis\Timetable\Models\SchoolCalendar;

it('can create a school calendar', function () {
    $school = School::factory()->create();
    $schoolCalendar = SchoolCalendar::factory()->create([
        'school_id' => $school->id,
        'name' => 'Calendário Escolar 2024',
        'year' => 2024,
    ]);

    expect($schoolCalendar->name)->toBe('Calendário Escolar 2024')
        ->and($schoolCalendar->year)->toBe(2024)
        ->and($schoolCalendar->school_id)->toBe($school->id)
        ->and($schoolCalendar->exists)->toBeTrue();
});

it('can use factory to create school calendar', function () {
    $schoolCalendar = SchoolCalendar::factory()->create();

    expect($schoolCalendar->name)->toBeString()
        ->and($schoolCalendar->year)->toBeInt()
        ->and($schoolCalendar->school_id)->toBeInt()
        ->and($schoolCalendar->exists)->toBeTrue();
});

it('belongs to a school', function () {
    $schoolCalendar = SchoolCalendar::factory()->create();

    expect($schoolCalendar->school)->toBeInstanceOf(School::class);
});
