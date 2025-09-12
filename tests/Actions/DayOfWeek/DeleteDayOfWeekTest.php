<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\DayOfWeek\DeleteDayOfWeek;

describe('DeleteDayOfWeek', function () {
    beforeEach()->action(DeleteDayOfWeek::class);

    test()->toBeDeleteAction();
    test()->toValidateRequired('id');
});
