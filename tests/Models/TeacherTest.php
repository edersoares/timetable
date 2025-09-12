<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\Teacher;

test('can create a teacher', function () {
    $teacher = Teacher::factory()->create([
        'name' => 'João Silva',
        'slug' => 'joao-silva',
    ]);

    expect($teacher->name)->toBe('João Silva')
        ->and($teacher->slug)->toBe('joao-silva')
        ->and($teacher->exists)->toBeTrue();
});

test('can use factory to create teacher', function () {
    $teacher = Teacher::factory()->create();

    expect($teacher->name)->toBeString()
        ->and($teacher->slug)->toBeString()
        ->and($teacher->exists)->toBeTrue();
});
