<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\Grade;
use Portabilis\Timetable\Models\School;
use Portabilis\Timetable\Models\SchoolClass;

describe(SchoolClass::class, function () {
    beforeEach()->eloquent(SchoolClass::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
    test()->toHaveBelongsToRelation(Grade::class, 'grade');
    test()->toHaveBelongsToRelation(School::class, 'school');
});
