<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Portabilis\Timetable\Models\DayOfWeek;
use Portabilis\Timetable\Models\TeacherAvailability;

/**
 * @extends Factory<TeacherAvailability>
 */
class TeacherAvailabilityFactory extends Factory
{
    protected $model = TeacherAvailability::class;

    public function definition(): array
    {
        $startHour = $this->faker->numberBetween(7, 17);
        $endHour = $this->faker->numberBetween($startHour + 1, 18);

        /** @phpstan-ignore-next-line */
        return [
            'day_of_week_id' => DayOfWeek::factory(),
            'start_time' => sprintf('%02d:00:00', $startHour),
            'end_time' => sprintf('%02d:00:00', $endHour),
        ];
    }
}
