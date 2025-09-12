<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\SchoolCalendar\CreateSchoolCalendar;

describe('CreateSchoolCalendar', function () {
    beforeEach()->action(CreateSchoolCalendar::class);

    test()->toBeCreateAction();
    test()->toValidateRequired('academic_year_id');
    test()->toValidateInteger('academic_year_id');
    test()->toValidateExists('academic_year_id', 'academic_year');
    test()->toValidateRequired('school_id');
    test()->toValidateInteger('school_id');
    test()->toValidateExists('school_id', 'school');
    test()->toValidateRequired('name');
    test()->toValidateMin('name', 3);
    test()->toValidateMax('name', 50);
});
