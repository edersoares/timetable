<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\Course;
use Portabilis\Timetable\Models\Grade;

describe(Grade::class, function () {
    beforeEach()->eloquent(Grade::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
    test()->toHaveBelongsToRelation(Course::class, 'course');
});
