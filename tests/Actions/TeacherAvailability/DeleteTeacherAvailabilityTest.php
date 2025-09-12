<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\TeacherAvailability\DeleteTeacherAvailability;

describe('DeleteTeacherAvailability', function () {
    beforeEach()->action(DeleteTeacherAvailability::class);

    test()->toBeDeleteAction();
    test()->toValidateRequired('id');
});
