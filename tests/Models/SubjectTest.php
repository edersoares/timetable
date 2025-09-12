<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\Subject;

describe(Subject::class, function () {
    beforeEach()->eloquent(Subject::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
});