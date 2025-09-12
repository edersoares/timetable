<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\AcademicYear;

test('can create an academic year', function () {
    $academicYear = AcademicYear::factory()->create([
        'name' => 'Ano Letivo 2024',
        'year' => 2024,
    ]);

    expect($academicYear->name)->toBe('Ano Letivo 2024')
        ->and($academicYear->year)->toBe(2024)
        ->and($academicYear->exists)->toBeTrue();
});

test('can use factory to create academic year', function () {
    $academicYear = AcademicYear::factory()->create();

    expect($academicYear->name)->toBeString()
        ->and($academicYear->year)->toBeInt()
        ->and($academicYear->exists)->toBeTrue();
});
