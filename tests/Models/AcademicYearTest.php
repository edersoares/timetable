<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\AcademicYear;

describe(AcademicYear::class, function () {
    beforeEach()->eloquent(AcademicYear::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
});
