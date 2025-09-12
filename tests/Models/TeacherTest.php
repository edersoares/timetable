<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\Teacher;

describe(Teacher::class, function () {
    beforeEach()->eloquent(Teacher::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
});
