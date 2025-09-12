<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\TeacherAvailability;

test('can create a teacher availability', function () {
    $teacherAvailability = TeacherAvailability::factory()->create([
        'name' => 'Disponível',
        'slug' => 'disponivel',
    ]);

    expect($teacherAvailability->name)->toBe('Disponível')
        ->and($teacherAvailability->slug)->toBe('disponivel')
        ->and($teacherAvailability->exists)->toBeTrue();
});

test('can use factory to create teacher availability', function () {
    $teacherAvailability = TeacherAvailability::factory()->create();

    expect($teacherAvailability->name)->toBeString()
        ->and($teacherAvailability->slug)->toBeString()
        ->and($teacherAvailability->exists)->toBeTrue();
});
