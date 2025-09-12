<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\Subject\CreateSubject;

describe('CreateSubject', function () {
    beforeEach()->action(CreateSubject::class);

    test()->toBeCreateAction();
    test()->toValidateRequired('name');
    test()->toValidateMin('name', 3);
    test()->toValidateMax('name', 50);
    test()->toValidateRequired('slug');
    test()->toValidateMin('slug', 3);
    test()->toValidateMax('slug', 50);
});
