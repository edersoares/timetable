<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\AcademicYear\UpdateAcademicYear;

describe('UpdateAcademicYear', function () {
    beforeEach()->action(UpdateAcademicYear::class);

    test()->toBeUpdateAction();
    test()->toValidateRequired('id');
    test()->toValidateMin('name', 3);
    test()->toValidateMax('name', 50);
    test()->toValidateInteger('year');
    test()->toValidateMinNumeric('year', 1900);
    test()->toValidateMaxNumeric('year', 2100);
});
