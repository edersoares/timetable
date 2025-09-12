<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Providers;

use Illuminate\Support\ServiceProvider;
use Portabilis\Timetable\Console\Commands\TimetableCommand;

class TimetableServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/timetable.php');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'timetable');

        if ($this->app->runningInConsole()) {
            $this->commands([
                TimetableCommand::class,
            ]);

            $this->loadMigrationsFrom([
                __DIR__ . '/../../database/migrations',
            ]);
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/timetable.php', 'timetable');
    }
}
