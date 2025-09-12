<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\SchoolClassScheduleSlot;

describe(SchoolClassScheduleSlot::class, function () {
    beforeEach()->eloquent(SchoolClassScheduleSlot::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
});