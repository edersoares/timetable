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
    test()->toValidateMin('year', 1900);
    test()->toValidateMax('year', 2100);
});
