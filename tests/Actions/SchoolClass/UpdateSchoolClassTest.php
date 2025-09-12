<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\SchoolClass\UpdateSchoolClass;

describe('UpdateSchoolClass', function () {
    beforeEach()->action(UpdateSchoolClass::class);

    test()->toBeUpdateAction();
    test()->toValidateRequired('id');
    test()->toValidateInteger('grade_id');
    test()->toValidateExists('grade_id', 'grade');
    test()->toValidateInteger('school_id');
    test()->toValidateExists('school_id', 'school');
    test()->toValidateMin('name', 3);
    test()->toValidateMax('name', 50);
    test()->toValidateMin('slug', 3);
    test()->toValidateMax('slug', 50);
});
