<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\DayOfWeek\UpdateDayOfWeek;

describe('UpdateDayOfWeek', function () {
    beforeEach()->action(UpdateDayOfWeek::class);

    test()->toBeUpdateAction();
    test()->toValidateRequired('id');
    test()->toValidateMin('slug', 3);
    test()->toValidateMax('slug', 50);
});
