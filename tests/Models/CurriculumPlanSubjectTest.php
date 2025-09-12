<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\CurriculumPlanSubject;

describe(CurriculumPlanSubject::class, function () {
    beforeEach()->eloquent(CurriculumPlanSubject::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
});