<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\Subject;

test('can create a subject', function () {
    $subject = Subject::factory()->create([
        'name' => 'Matemática',
        'slug' => 'matematica',
    ]);

    expect($subject->name)->toBe('Matemática')
        ->and($subject->slug)->toBe('matematica')
        ->and($subject->exists)->toBeTrue();
});

test('can use factory to create subject', function () {
    $subject = Subject::factory()->create();

    expect($subject->name)->toBeString()
        ->and($subject->slug)->toBeString()
        ->and($subject->exists)->toBeTrue();
});
