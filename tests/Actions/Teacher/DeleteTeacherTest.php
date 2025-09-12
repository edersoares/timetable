<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\Teacher\DeleteTeacher;

describe('DeleteTeacher', function () {
    beforeEach()->action(DeleteTeacher::class);

    test()->toBeDeleteAction();
    test()->toValidateRequired('id');
});
