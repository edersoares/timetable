<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\Course\UpdateCourse;

describe('UpdateCourse', function () {
    beforeEach()->action(UpdateCourse::class);

    test()->toBeUpdateAction();
    test()->toValidateRequired('id');
    test()->toValidateMin('name', 3);
    test()->toValidateMax('name', 50);
    test()->toValidateMin('slug', 3);
    test()->toValidateMax('slug', 50);
});
