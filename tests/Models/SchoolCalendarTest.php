<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\AcademicYear;
use Portabilis\Timetable\Models\School;
use Portabilis\Timetable\Models\SchoolCalendar;

describe(SchoolCalendar::class, function () {
    beforeEach()->eloquent(SchoolCalendar::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
    test()->toHaveBelongsToRelation(AcademicYear::class, 'academicYear');
    test()->toHaveBelongsToRelation(School::class, 'school');
});
