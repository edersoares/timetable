<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Orchestra\Testbench\TestCase as Orchestra;
use Portabilis\Timetable\Providers\TimetableServiceProvider;

class TestCase extends Orchestra
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Portabilis\\Timetable\\Database\\Factories\\' . class_basename($modelName) . 'Factory'
        );

        Factory::guessModelNamesUsing(
            fn ($factory) => 'Portabilis\\Timetable\\Models\\' . Str::replaceLast('Factory', '', class_basename($factory))
        );
    }

    protected function getPackageProviders($app): array
    {
        return [
            TimetableServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');
    }
}
