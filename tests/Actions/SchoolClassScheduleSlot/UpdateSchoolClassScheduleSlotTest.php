<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\SchoolClassScheduleSlot\UpdateSchoolClassScheduleSlot;

describe('UpdateSchoolClassScheduleSlot', function () {
    beforeEach()->action(UpdateSchoolClassScheduleSlot::class);

    test()->toBeUpdateAction();
    test()->toValidateRequired('id');
    test()->toValidateInteger('school_class_schedule_id');
    test()->toValidateExists('school_class_schedule_id', 'school_class_schedule');
    test()->toValidateInteger('shift_id');
    test()->toValidateExists('shift_id', 'shift');
    test()->toValidateInteger('day_of_week_id');
    test()->toValidateExists('day_of_week_id', 'day_of_week');
    test()->toValidateDateFormat('start_time', 'H:i');
    test()->toValidateDateFormat('end_time', 'H:i');
});
