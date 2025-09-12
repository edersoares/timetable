<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\CurriculumPlan;
use Portabilis\Timetable\Models\Grade;

describe(CurriculumPlan::class, function () {
    beforeEach()->eloquent(CurriculumPlan::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
    test()->toHaveBelongsToRelation(Grade::class, 'grade');
});
