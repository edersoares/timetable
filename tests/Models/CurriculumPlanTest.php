<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\CurriculumPlan;

describe(CurriculumPlan::class, function () {
    beforeEach()->eloquent(CurriculumPlan::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
});