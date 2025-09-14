<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\CurriculumPlanSubject\CreateCurriculumPlanSubject;

describe('CreateCurriculumPlanSubject', function () {
    beforeEach()->action(CreateCurriculumPlanSubject::class);

    test()->toBeCreateAction();
    test()->toValidateRequired('curriculum_plan_id');
    test()->toValidateInteger('curriculum_plan_id');
    test()->toValidateExists('curriculum_plan_id', 'curriculum_plan');
    test()->toValidateRequired('subject_id');
    test()->toValidateInteger('subject_id');
    test()->toValidateExists('subject_id', 'subject');
    test()->toValidateRequired('quantity');
    test()->toValidateInteger('quantity');
    test()->toValidateMinNumeric('quantity', 1);
});
