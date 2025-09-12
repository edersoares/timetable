<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\SchoolClassScheduleSlot\CreateSchoolClassScheduleSlot;

describe('CreateSchoolClassScheduleSlot', function () {
    beforeEach()->action(CreateSchoolClassScheduleSlot::class);

    test()->toBeCreateAction();
    test()->toValidateRequired('school_class_schedule_id');
    test()->toValidateInteger('school_class_schedule_id');
    test()->toValidateExists('school_class_schedule_id', 'school_class_schedule');
    test()->toValidateRequired('shift_id');
    test()->toValidateInteger('shift_id');
    test()->toValidateExists('shift_id', 'shift');
    test()->toValidateRequired('day_of_week_id');
    test()->toValidateInteger('day_of_week_id');
    test()->toValidateExists('day_of_week_id', 'day_of_week');
    test()->toValidateRequired('start_time');
    test()->toValidateDateFormat('start_time', 'H:i');
    test()->toValidateRequired('end_time');
    test()->toValidateDateFormat('end_time', 'H:i');
});
