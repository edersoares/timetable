<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\CurriculumPlan;
use Portabilis\Timetable\Models\CurriculumPlanSubject;
use Portabilis\Timetable\Models\Subject;

test('can create a curriculum plan subject', function () {
    $curriculumPlan = CurriculumPlan::factory()->create();
    $subject = Subject::factory()->create();
    $curriculumPlanSubject = CurriculumPlanSubject::factory()->create([
        'curriculum_plan_id' => $curriculumPlan->id,
        'subject_id' => $subject->id,
        'quantity' => 3,
    ]);

    expect($curriculumPlanSubject->curriculum_plan_id)->toBe($curriculumPlan->id)
        ->and($curriculumPlanSubject->subject_id)->toBe($subject->id)
        ->and($curriculumPlanSubject->quantity)->toBe(3)
        ->and($curriculumPlanSubject->exists)->toBeTrue();
});

test('can use factory to create curriculum plan subject', function () {
    $curriculumPlanSubject = CurriculumPlanSubject::factory()->create();

    expect($curriculumPlanSubject->curriculum_plan_id)->toBeInt()
        ->and($curriculumPlanSubject->subject_id)->toBeInt()
        ->and($curriculumPlanSubject->quantity)->toBeInt()
        ->and($curriculumPlanSubject->exists)->toBeTrue();
});

test('belongs to curriculum plan and subject', function () {
    $curriculumPlanSubject = CurriculumPlanSubject::factory()->create();

    expect($curriculumPlanSubject->curriculumPlan)->toBeInstanceOf(CurriculumPlan::class)
        ->and($curriculumPlanSubject->subject)->toBeInstanceOf(Subject::class);
});
