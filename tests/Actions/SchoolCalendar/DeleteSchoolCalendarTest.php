<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\SchoolCalendar\DeleteSchoolCalendar;

describe('DeleteSchoolCalendar', function () {
    beforeEach()->action(DeleteSchoolCalendar::class);

    test()->toBeDeleteAction();
    test()->toValidateRequired('id');
});
