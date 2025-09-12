<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\TeacherAvailability;

describe(TeacherAvailability::class, function () {
    beforeEach()->eloquent(TeacherAvailability::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
});