<?php

declare(strict_types=1);

use Portabilis\Timetable\Actions\Executor;
use Portabilis\Timetable\Tests\Eloquent;
use Portabilis\Timetable\Tests\TestCase;
use Portabilis\Timetable\Tests\Tester;

uses(TestCase::class)->in(__DIR__);
uses(Tester::class)->in(__DIR__);
uses(Eloquent::class)->in(__DIR__);

function execute(string $action, array $data)
{
    return app(Executor::class)->execute($action, $data);
}
