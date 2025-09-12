<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\Shift\DeleteShift;

describe('DeleteShift', function () {
    beforeEach()->action(DeleteShift::class);

    test()->toBeDeleteAction();
    test()->toValidateRequired('id');
});
