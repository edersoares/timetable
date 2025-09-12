<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\CurriculumPlan;
use Portabilis\Timetable\Models\Grade;

test('can create a curriculum plan', function () {
    $grade = Grade::factory()->create();
    $curriculumPlan = CurriculumPlan::factory()->create([
        'grade_id' => $grade->id,
        'name' => 'Matriz Curricular Base',
        'slug' => 'matriz-curricular-base',
    ]);

    expect($curriculumPlan->name)->toBe('Matriz Curricular Base')
        ->and($curriculumPlan->slug)->toBe('matriz-curricular-base')
        ->and($curriculumPlan->grade_id)->toBe($grade->id)
        ->and($curriculumPlan->exists)->toBeTrue();
});

test('can use factory to create curriculum plan', function () {
    $curriculumPlan = CurriculumPlan::factory()->create();

    expect($curriculumPlan->name)->toBeString()
        ->and($curriculumPlan->slug)->toBeString()
        ->and($curriculumPlan->grade_id)->toBeInt()
        ->and($curriculumPlan->exists)->toBeTrue();
});

test('belongs to a grade', function () {
    $curriculumPlan = CurriculumPlan::factory()->create();

    expect($curriculumPlan->grade)->toBeInstanceOf(Grade::class);
});
