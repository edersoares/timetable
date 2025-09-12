<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\Subject\DeleteSubject;

describe('DeleteSubject', function () {
    beforeEach()->action(DeleteSubject::class);

    test()->toBeDeleteAction();
    test()->toValidateRequired('id');
});
