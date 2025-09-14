<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\School\DeleteSchool;

describe('DeleteSchool', function () {
    beforeEach()->action(DeleteSchool::class);

    test()->toBeDeleteAction();
    test()->toValidateRequired('id');
});
