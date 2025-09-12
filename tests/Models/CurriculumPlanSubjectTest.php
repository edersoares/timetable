<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\CurriculumPlan;
use Portabilis\Timetable\Models\CurriculumPlanSubject;
use Portabilis\Timetable\Models\Subject;

describe(CurriculumPlanSubject::class, function () {
    beforeEach()->eloquent(CurriculumPlanSubject::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
    test()->toHaveBelongsToRelation(CurriculumPlan::class, 'curriculumPlan');
    test()->toHaveBelongsToRelation(Subject::class, 'subject');
});
