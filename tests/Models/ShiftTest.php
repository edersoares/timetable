<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\Shift;

describe(Shift::class, function () {
    beforeEach()->eloquent(Shift::class);

    test()->toBeCreate();
    test()->toBeDelete();
    test()->toBeUpdate();
});