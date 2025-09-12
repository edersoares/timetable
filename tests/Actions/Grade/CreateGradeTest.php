<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\Grade\CreateGrade;

describe('CreateGrade', function () {
    beforeEach()->action(CreateGrade::class);

    test()->toBeCreateAction();
    test()->toValidateRequired('course_id');
    test()->toValidateInteger('course_id');
    test()->toValidateExists('course_id', 'course');
    test()->toValidateRequired('name');
    test()->toValidateMin('name', 3);
    test()->toValidateMax('name', 50);
    test()->toValidateRequired('slug');
    test()->toValidateMin('slug', 3);
    test()->toValidateMax('slug', 50);
});
