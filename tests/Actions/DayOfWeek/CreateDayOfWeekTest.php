<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\DayOfWeek\CreateDayOfWeek;

describe('CreateDayOfWeek', function () {
    beforeEach()->action(CreateDayOfWeek::class);

    test()->toBeCreateAction();
    test()->toValidateRequired('slug');
    test()->toValidateMin('slug', 3);
    test()->toValidateMax('slug', 50);
});
