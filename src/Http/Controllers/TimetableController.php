<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Http\Controllers;

class TimetableController
{
    public function __invoke(): string
    {
        return 'Timetable';
    }
}
