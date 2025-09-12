<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\SchoolClassSchedule\UpdateSchoolClassSchedule;

describe('UpdateSchoolClassSchedule', function () {
    beforeEach()->action(UpdateSchoolClassSchedule::class);

    test()->toBeUpdateAction();
    test()->toValidateRequired('id');
    test()->toValidateMin('name', 3);
    test()->toValidateMax('name', 50);
});
