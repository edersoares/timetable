<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\School;

describe(School::class, function () {
    beforeEach()->eloquent(School::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
});