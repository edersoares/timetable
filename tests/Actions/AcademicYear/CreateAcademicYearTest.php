<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\AcademicYear\CreateAcademicYear;

describe('CreateAcademicYear', function () {
    beforeEach()->action(CreateAcademicYear::class);

    test()->toBeCreateAction();
    test()->toValidateRequired('name');
    test()->toValidateMin('name', 3);
    test()->toValidateMax('name', 50);
    test()->toValidateRequired('year');
    test()->toValidateInteger('year');
    test()->toValidateMinNumeric('year', 1900);
    test()->toValidateMaxNumeric('year', 2100);
});
