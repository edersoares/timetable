<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\Course\DeleteCourse;

describe('DeleteCourse', function () {
    beforeEach()->action(DeleteCourse::class);

    test()->toBeDeleteAction();
    test()->toValidateRequired('id');
});
