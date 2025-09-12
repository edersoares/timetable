<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Console\Commands;

use Illuminate\Console\Command;

class TimetableCommand extends Command
{
    protected $signature = 'timetable';

    protected $description = 'Timetable';

    public function handle(): int
    {
        $this->comment('Timetable');

        return self::SUCCESS;
    }
}
