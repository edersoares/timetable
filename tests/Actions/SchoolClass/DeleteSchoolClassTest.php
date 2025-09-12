<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\SchoolClass\DeleteSchoolClass;

describe('DeleteSchoolClass', function () {
    beforeEach()->action(DeleteSchoolClass::class);

    test()->toBeDeleteAction();
    test()->toValidateRequired('id');
});
