<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\TeacherAvailability\CreateTeacherAvailability;

describe('CreateTeacherAvailability', function () {
    beforeEach()->action(CreateTeacherAvailability::class);

    test()->toBeCreateAction();
    test()->toValidateRequired('day_of_week_id');
    test()->toValidateInteger('day_of_week_id');
    test()->toValidateExists('day_of_week_id', 'day_of_week');
    test()->toValidateRequired('start_time');
    test()->toValidateDateFormat('start_time', 'H:i');
    test()->toValidateRequired('end_time');
    test()->toValidateDateFormat('end_time', 'H:i');
});
