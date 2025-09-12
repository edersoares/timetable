<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\DayOfWeek;
use Portabilis\Timetable\Models\SchoolClassSchedule;
use Portabilis\Timetable\Models\SchoolClassScheduleSlot;
use Portabilis\Timetable\Models\Shift;

describe(SchoolClassScheduleSlot::class, function () {
    beforeEach()->eloquent(SchoolClassScheduleSlot::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
    test()->toHaveBelongsToRelation(SchoolClassSchedule::class, 'schoolClassSchedule');
    test()->toHaveBelongsToRelation(Shift::class, 'shift');
    test()->toHaveBelongsToRelation(DayOfWeek::class, 'dayOfWeek');
});
