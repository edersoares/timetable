<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\SchoolCalendar\UpdateSchoolCalendar;

describe('UpdateSchoolCalendar', function () {
    beforeEach()->action(UpdateSchoolCalendar::class);

    test()->toBeUpdateAction();
    test()->toValidateRequired('id');
    test()->toValidateInteger('academic_year_id');
    test()->toValidateExists('academic_year_id', 'academic_year');
    test()->toValidateInteger('school_id');
    test()->toValidateExists('school_id', 'school');
    test()->toValidateMin('name', 3);
    test()->toValidateMax('name', 50);
});
