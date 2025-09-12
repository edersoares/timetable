<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\SchoolClassScheduleSlot\DeleteSchoolClassScheduleSlot;

describe('DeleteSchoolClassScheduleSlot', function () {
    beforeEach()->action(DeleteSchoolClassScheduleSlot::class);

    test()->toBeDeleteAction();
    test()->toValidateRequired('id');
});
