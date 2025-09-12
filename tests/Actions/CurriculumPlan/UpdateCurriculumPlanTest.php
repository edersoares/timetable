<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\CurriculumPlan\UpdateCurriculumPlan;

describe('UpdateCurriculumPlan', function () {
    beforeEach()->action(UpdateCurriculumPlan::class);

    test()->toBeUpdateAction();
    test()->toValidateRequired('id');
    test()->toValidateInteger('grade_id');
    test()->toValidateExists('grade_id', 'grade');
    test()->toValidateMin('name', 3);
    test()->toValidateMax('name', 50);
    test()->toValidateMin('slug', 3);
    test()->toValidateMax('slug', 50);
});
