<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\Course;

describe(Course::class, function () {
    beforeEach()->eloquent(Course::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
});