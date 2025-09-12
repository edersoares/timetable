<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\CurriculumPlan\CreateCurriculumPlan;

describe('CreateCurriculumPlan', function () {
    beforeEach()->action(CreateCurriculumPlan::class);

    test()->toBeCreateAction();
    test()->toValidateRequired('grade_id');
    test()->toValidateInteger('grade_id');
    test()->toValidateExists('grade_id', 'grade');
    test()->toValidateRequired('name');
    test()->toValidateMin('name', 3);
    test()->toValidateMax('name', 50);
    test()->toValidateRequired('slug');
    test()->toValidateMin('slug', 3);
    test()->toValidateMax('slug', 50);
});
