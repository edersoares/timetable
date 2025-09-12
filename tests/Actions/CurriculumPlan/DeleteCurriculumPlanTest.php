<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\CurriculumPlan\DeleteCurriculumPlan;

describe('DeleteCurriculumPlan', function () {
    beforeEach()->action(DeleteCurriculumPlan::class);

    test()->toBeDeleteAction();
    test()->toValidateRequired('id');
});
