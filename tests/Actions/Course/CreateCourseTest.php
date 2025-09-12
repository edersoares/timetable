<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\Course\CreateCourse;

describe('CreateCourse', function () {
    beforeEach()->action(CreateCourse::class);

    test()->toBeCreateAction();
    test()->toValidateRequired('name');
    test()->toValidateMin('name', 3);
    test()->toValidateMax('name', 50);
    test()->toValidateRequired('slug');
    test()->toValidateMin('slug', 3);
    test()->toValidateMax('slug', 50);
});
