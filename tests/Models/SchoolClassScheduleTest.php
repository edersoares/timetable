<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\SchoolClassSchedule;

describe(SchoolClassSchedule::class, function () {
    beforeEach()->eloquent(SchoolClassSchedule::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
});