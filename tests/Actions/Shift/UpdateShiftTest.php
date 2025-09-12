<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\Shift\UpdateShift;

describe('UpdateShift', function () {
    beforeEach()->action(UpdateShift::class);

    test()->toBeUpdateAction();
    test()->toValidateRequired('id');
    test()->toValidateMin('name', 3);
    test()->toValidateMax('name', 50);
});
