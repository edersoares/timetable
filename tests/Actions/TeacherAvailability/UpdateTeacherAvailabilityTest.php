<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\TeacherAvailability\UpdateTeacherAvailability;

describe('UpdateTeacherAvailability', function () {
    beforeEach()->action(UpdateTeacherAvailability::class);

    test()->toBeUpdateAction();
    test()->toValidateRequired('id');
    test()->toValidateInteger('day_of_week_id');
    test()->toValidateExists('day_of_week_id', 'day_of_week');
    test()->toValidateDateFormat('start_time', 'H:i');
    test()->toValidateDateFormat('end_time', 'H:i');
});
