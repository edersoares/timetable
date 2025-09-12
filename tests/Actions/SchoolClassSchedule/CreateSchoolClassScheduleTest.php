<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\SchoolClassSchedule\CreateSchoolClassSchedule;

describe('CreateSchoolClassSchedule', function () {
    beforeEach()->action(CreateSchoolClassSchedule::class);
    beforeEach()->shouldUseFactoryMake();

    test()->toBeCreateAction();
    test()->toValidateRequired('name');
    test()->toValidateMin('name', 3);
    test()->toValidateMax('name', 50);
});
