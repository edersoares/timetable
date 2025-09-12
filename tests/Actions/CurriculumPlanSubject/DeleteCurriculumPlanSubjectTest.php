<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\CurriculumPlanSubject\DeleteCurriculumPlanSubject;

describe('DeleteCurriculumPlanSubject', function () {
    beforeEach()->action(DeleteCurriculumPlanSubject::class);

    test()->toBeDeleteAction();
    test()->toValidateRequired('id');
});
