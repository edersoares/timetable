<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Portabilis\Timetable\Models\DayOfWeek;

/**
 * @extends Factory<DayOfWeek>
 */
class DayOfWeekFactory extends Factory
{
    protected $model = DayOfWeek::class;

    public function definition(): array
    {
        /** @phpstan-ignore-next-line */
        return [
            'slug' => $this->faker->randomElement(['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']),
        ];
    }
}
