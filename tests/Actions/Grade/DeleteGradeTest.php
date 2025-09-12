<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\Grade\DeleteGrade;

describe('DeleteGrade', function () {
    beforeEach()->action(DeleteGrade::class);

    test()->toBeDeleteAction();
    test()->toValidateRequired('id');
});
