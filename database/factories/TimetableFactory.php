<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Portabilis\Timetable\Models\Timetable;

/**
 * @extends Factory<Timetable>
 */
class TimetableFactory extends Factory
{
    protected $model = Timetable::class;

    public function definition(): array
    {
        return [

        ];
    }
}
