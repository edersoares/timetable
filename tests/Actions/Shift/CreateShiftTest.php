<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\Shift\CreateShift;

describe('CreateShift', function () {
    beforeEach()->action(CreateShift::class);

    test()->toBeCreateAction();
    test()->toValidateRequired('name');
    test()->toValidateMin('name', 3);
    test()->toValidateMax('name', 50);
});
