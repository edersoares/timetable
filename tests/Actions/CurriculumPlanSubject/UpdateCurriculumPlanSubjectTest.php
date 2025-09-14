<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\CurriculumPlanSubject\UpdateCurriculumPlanSubject;

describe('UpdateCurriculumPlanSubject', function () {
    beforeEach()->action(UpdateCurriculumPlanSubject::class);

    test()->toBeUpdateAction();
    test()->toValidateRequired('id');
    test()->toValidateInteger('curriculum_plan_id');
    test()->toValidateExists('curriculum_plan_id', 'curriculum_plan');
    test()->toValidateInteger('subject_id');
    test()->toValidateExists('subject_id', 'subject');
    test()->toValidateInteger('quantity');
    test()->toValidateMinNumeric('quantity', 1);
});
