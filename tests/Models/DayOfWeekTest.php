<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\DayOfWeek;

describe(DayOfWeek::class, function () {
    beforeEach()->eloquent(DayOfWeek::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
});