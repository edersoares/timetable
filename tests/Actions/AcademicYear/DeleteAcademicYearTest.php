<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\AcademicYear\DeleteAcademicYear;

describe('DeleteAcademicYear', function () {
    beforeEach()->action(DeleteAcademicYear::class);

    test()->toBeDeleteAction();
    test()->toValidateRequired('id');
});
