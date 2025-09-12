<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\SchoolClassSchedule\DeleteSchoolClassSchedule;

describe('DeleteSchoolClassSchedule', function () {
    beforeEach()->action(DeleteSchoolClassSchedule::class);

    test()->toBeDeleteAction();
    test()->toValidateRequired('id');
});
